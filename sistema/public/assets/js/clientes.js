var cliente = {};

function temCliente() {
    if (cliente) {
        return true;
    }
    return false;
}

function formsDisable() {
    $("#estabelecimento :input").prop("disabled", true);
    $("#estabelecimento :button").hide();
    $("#endereco :input").prop("disabled", true);
    $("#endereco :button").hide();
    $("#endereco :input").prop("disabled", true);
    $("#endereco :button").hide();
    $("#contasBancarias :input").prop("disabled", true);
    $("#contasBancarias :button").hide();
}

function habilitarForm(formulario) {
    $(`#${formulario} :input`).prop("disabled", false);
    $(`#${formulario} :button`).show();
}

function desabilitarForm(formulario) {
    $(`#${formulario} :input`).prop("disabled", true);
    $(`#${formulario} :button`).prop("disabled", true);
}

function irPara(formulario) {
    $([document.documentElement, document.body]).animate({
        scrollTop: $(`.${formulario}`).position().top
    }, 2000);
}

function compararFormCliente(cliente, formulario) {
    $.each(cliente, function (campo, valor) {
        $(`#${formulario}`).find('select, input, textarea').each(function (index, formObj) {
            if (typeof valor === "object" && valor) {
                compararFormCliente(valor, campo);
            }
            if (campo == formObj.name) {
            }
            (campo === formObj.name) ? $(formObj).val(valor) : "";
        });
    });
}

function atualizarBotoes() {
    $("#cliente :button").text("");
    $("#endereco :button").text("");
    $("#estabelecimento :button").text("");
    $("#cliente :button").append("Atualizar").attr("onclick", "atualizar()");
    $("#contasBancarias :button").text("");
    //$("#estabelecimento :button").append("Cadastrar").attr("onclick", "cadastrarEstabelecimento()");
    $("#contasBancarias :button").append("Cadastrar").attr("onclick", "cadastrarEstabelecimento()");
    $("#contasBancarias :button").attr("onclick", "cadastrarContaBancaria()");

    if (cliente.endereco !== null) {
        $("#endereco :button").append("Atualizar").attr("onclick", "atualizarEndereco()");
    } else {
        $("#endereco :button").append("Cadastrar").attr("onclick", "cadastrarEndereco()");

    }
}

function verificarCliente() {
    cliente = JSON.parse(localStorage.getItem("cliente"));
    localStorage.removeItem("cliente");

    if (temCliente()) {
        atualizarBotoes();
        buscarContas(cliente.id, () => {
            compararFormCliente(cliente, "cliente");
        });

        buscarEndereco(cliente.id, () => {
            compararFormCliente(cliente, "cliente");
            atualizarBotoes();
        });

    } else {
        formsDisable();
        $(".btn").append("Salvar");
    }
}

function buscarEndereco(clienteId, callback = null) {
    $.get(`../back-end/clientes/${clienteId}/enderecos`, function (response) {
        cliente.endereco = JSON.parse(response);
        if (callback) {
            callback();
        }
    });
}

function buscarEstabelecimento(clienteId, callback = null) {
    $.get(`../back-end/clientes/${clienteId}/estabelecimentos`, function (response) {
        cliente.estabelecimentos = JSON.parse(response);
        popularEstabelecimentos(cliente.estabelecimentos);
        if (callback) {
            callback();
        }
    });
}

function buscarContas(clienteId, callback = null) {
    $.get(`../back-end/clientes/${clienteId}/contas-bancarias`, function (response) {
        cliente.contasBancarias = JSON.parse(response);
        popularContas(cliente.contasBancarias);
        if (callback) {
            callback();
        }
    });
}

function popularContas(contas) {
    $('#contas_bancarias tr').remove();
    for (const conta of contas) {
        var newRow = $("<tr class='item'>");
        var cols = "";
        cols += `<td>${conta.banco}</td>`;
        cols += `<td>${conta.agencia}</td>`;
        cols += `<td>${conta.conta}</td>`;
        newRow.append(cols);
        $("#contas_bancarias").append(newRow)
    }
}


function esconderModal() {
    $('#modal-default').modal('hide');
}

function mostrarModal() {
    $('#modal-default').modal({ backdrop: 'static', keyboard: false });

}

/**
 * 
 * Cadastros e Updates
 */

function cadastrar() {
    mostrarModal();
    var dados = $('#cliente').serialize();
    $.post("../back-end/clientes", dados, response => {
        cliente = JSON.parse(response);
        $("#contatos").show();
        irPara("endereco");
        habilitarForm("endereco");
    }).done(
        () => desabilitarForm("cliente")
    ).always(
        () => esconderModal()
    ).fail(
        () => exibirErro("endereco")
    );
}

function cadastrarEstabelecimento() {
    $(`#estabelecimento`).append(`<input hidden name='cliente_id' value=${cliente.id}>`);
    mostrarModal();
    var dados = $("#estabelecimento").serialize();

    $.post("../back-end/estabelecimentos", dados, function (response) {
        esconderModal();
        estabelecimentos = JSON.parse(response);
        buscarEstabelecimento(cliente.id);
    }).done(() => {
        desabilitarForm("estabelecimento");
        habilitarForm("contasBancarias");
    }).always(
        () => esconderModal()
    ).fail(
        () => exibirErro("estabelecimento")
    );
}

function popularEstabelecimentos(estabelecimentos) {
    $('#estabelecimentos tr').remove();
    for (const estabelecimento of estabelecimentos) {
        var newRow = $("<tr class='item'>");
        var cols = "";
        cols += `<td>${estabelecimento.razao_social}</td>`;
        cols += `<td>${estabelecimento.cnpj}</td>`;
        cols += `<td>${estabelecimento.inscricao_estadual}</td>`;
        newRow.append(cols);
        $("#estabelecimentos").append(newRow)
    }
}

function cadastrarEndereco() {
    $(`#endereco`).append(`<input hidden name='cliente_id' value=${cliente.id}>`);
    mostrarModal();
    var dados = $("#endereco").serialize();

    $.post("../back-end/clientes/enderecos", dados, function (response) {
        esconderModal();
        faturamento = JSON.parse(response);
        irPara("contasBancarias");
        habilitarForm("contasBancarias");
    }).done(
        () => desabilitarForm("endereco")
    ).always(
        () => esconderModal()
    ).fail(
        () => exibirErro("endereco")
    );
}

function cadastrarContaBancaria() {
    $(`#contasBancarias`).append(`<input hidden name='cliente_id' value=${cliente.id}>`);
    mostrarModal();
    var dados = $("#contasBancarias").serialize();
    $.post(`../back-end/clientes/contas-bancarias`, dados, function (response) {
        esconderModal();
        buscarContas(cliente.id);
    });
}

function atualizar() {
    var dados = $('#cliente').serialize();
    $.ajax({
        url: `../back-end/clientes/${cliente.id}`,
        type: 'PUT',
        data: dados,
        success: function (response) {
        }
    });
}

function atualizarEndereco() {
    $(`#endereco`).append(`<input hidden name='cliente_id' value=${cliente.id}>`);
    $(`#endereco`).append(`<input hidden name='id' value=${cliente.endereco.id}>`);
    var dados = $("#endereco").serialize();
    $.ajax({
        url: `../back-end/clientes/enderecos/${cliente.endereco.id}`,
        type: 'PUT',
        data: dados,
        success: function (response) {
            entrega = JSON.parse(response);
        }
    });
}

function exibirErro(form) {
    $(`#${form} .erro`).show("slow");
    setTimeout(() => {
        $(".erro").hide("slow");
    }, 2000);
}
