var cliente = {};
var contatos = [{}];

function temCliente() {
    if (cliente) {
        return true;
    }
    return false;
}

function formsDisable() {
    $("#contatos :input").prop("disabled", true);
    $("#contatos :button").hide();
    $("#contatos").hide();
    $("#enderecoFaturamento :input").prop("disabled", true);
    $("#enderecoFaturamento :button").hide();
    $("#enderecoEntrega :input").prop("disabled", true);
    $("#enderecoEntrega :button").hide();
    $("#contasBancarias :input").prop("disabled", true);
    $("#contasBancarias :button").hide();
}

function habilitarForm(formulario) {
    $(`#${formulario} :input`).prop("disabled", false);
    $(`#${formulario} :button`).show();
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
    $("#cliente :button").append("Atualizar").attr("onclick", "atualizar()");
    console.log(cliente.enderecoEntrega);
    if (cliente.enderecoEntrega !== null) {
        $("#enderecoEntrega :button").append("Atualizar").attr("onclick", "atualizarEnderecoEnt()");
    } else {
        $("#enderecoEntrega :button").append("Cadastrar").attr("onclick", "cadastrarEnderecoEnt()");

    }
    if (cliente.enderecoFaturamento !== null) {
        $("#enderecoFaturamento :button").append("Atualizar").attr("onclick", "atualizarEnderecoFat()");
    } else {
        $("#enderecoFaturamento :button").append("Cadastrar").attr("onclick", "cadastrarEnderecoFat()");

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
    } else {
        formsDisable();
        $(".btn").append("Salvar");
    }
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

function popularContatos(contatos) {
    $('#contatosLista .box-body').remove();
    $.each(contatos, function (index, contato) {
        var option = `<div class="box-body ">${contato.telefone} - ${contato.observacao}</div>`
        $("#contatosLista").append(option)
    })
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
    $.post("../back-end/clientes", dados, function (response) {
        cliente = JSON.parse(response);
        console.log(response);
        console.log("teste");
        $("#contatos").show();
        esconderModal();
        irPara("enderecoFaturamento");
        habilitarForm("enderecoFaturamento");
    });
}

function cadastrarContato() {
    $(`#contatos`).append(`<input hidden name='cliente_id' value=${cliente.id}>`);
    mostrarModal();
    var dados = $("#contatos").serialize();
    $.post("../back-end/clientes/contatos", dados, function (response) {
        esconderModal();
        contatos = JSON.parse(response);
        popularContatos(contatos);
    });
}

function cadastrarEnderecoFat() {
    $(`#enderecoFaturamento`).append(`<input hidden name='cliente_id' value=${cliente.id}>`);
    mostrarModal();
    var dados = $("#enderecoFaturamento").serialize();

    $.post("../back-end/clientes/enderecos-faturamentos", dados, function (response) {
        esconderModal();
        faturamento = JSON.parse(response);
        irPara("enderecoEntrega");
        habilitarForm("enderecoEntrega");
    });
}

function cadastrarEnderecoEnt() {
    $(`#enderecoEntrega`).append(`<input hidden name='cliente_id' value=${cliente.id}>`);
    mostrarModal();
    var dados = $("#enderecoEntrega").serialize();
    $.post("../back-end/clientes/enderecos-entregas", dados, function (response) {
        esconderModal();
        entrega = JSON.parse(response);
        irPara("contasBancarias");
        habilitarForm("contasBancarias");
    });
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
    $(`#cliente`).append(`<input hidden name='cliente_id' value=${cliente.id}>`);
    var dados = $('#cliente').serialize();
    $.ajax({
        url: `../back-end/clientes/${cliente.id}`,
        type: 'PUT',
        data: dados,
        success: function (response) {
        }
    });
}

function atualizarEnderecoFat() {
    $(`#enderecoFaturamento`).append(`<input hidden name='cliente_id' value=${cliente.id}>`);
    $(`#enderecoFaturamento`).append(`<input hidden name='id' value=${cliente.enderecoFaturamento.id}>`);
    var dados = $("#enderecoFaturamento").serialize();

    $.ajax({
        url: `../back-end/clientes/enderecos-faturamentos/${cliente.enderecoFaturamento.id}`,
        type: 'PUT',
        data: dados,
        success: function (response) {
            faturamento = JSON.parse(response);

        }
    });
}

function atualizarEnderecoEnt() {
    $(`#enderecoEntrega`).append(`<input hidden name='cliente_id' value=${cliente.id}>`);
    $(`#enderecoEntrega`).append(`<input hidden name='id' value=${cliente.enderecoEntrega.id}>`);
    var dados = $("#enderecoEntrega").serialize();
    $.ajax({
        url: `../back-end/clientes/enderecos-entregas/${cliente.enderecoEntrega.id}`,
        type: 'PUT',
        data: dados,
        success: function (response) {
            entrega = JSON.parse(respose);
        }
    });
}
