var cliente = null;
var unidade = null;

function temCliente() {
    return (cliente) ? true : false;
}

function temUnidade() {
    return (unidade) ? true : false;
}

function temEndereco() {
    return (cliente.endereco) ? true : false;
}

/**
 * AJAX
 */

/**
 * Verifica se há um cliente no localStorage
 * caso haja ele pega esse cliente e depois excluí do
 * localStorage
 */
$(document).ready(() => {
    if (localStorage.hasOwnProperty('cliente')) {

        cliente = JSON.parse(localStorage.getItem("cliente"));
        localStorage.removeItem("cliente");

        buscarContas(cliente.id, () => {
            compararFormCliente(cliente, "cliente");
        });

        buscarEndereco(cliente.id, () => {
            compararFormCliente(cliente, "cliente");
        });

        buscarUnidades(cliente.id);

    } else {
        desabilitarForm();
    }
});

/**
 * Adiciona o texto: Salvar a todos os botões
 */
$(".btn").text("Salvar");
/**
 * Verifica se há cliente, caso haja
 * atualiza, do contrário, cadastra um.
 */
$("#cliente").submit(function (event) {
    event.preventDefault();
    (temCliente()) ? atualizar() : cadastrar();
});

/**
 * Verifica se há uma unidade, caso haja
 * atualiza, do contrário, cadastra uma.
 */
$("#unidade").submit(function (event) {
    event.preventDefault();
    (temUnidade()) ? atualizarUnidade() : cadastrarUnidade();
});

/**
 * Verifica se há cliente, caso haja
 * atualiza o endereço, do contrário, cadastra um.
 */
$("#endereco").submit(function (event) {
    event.preventDefault();
    (temCliente() && temEndereco()) ? atualizarEndereco() : cadastrarEndereco();
});

/**
 * Verifica se há cliente, caso haja
 * atualiza o endereço, do contrário, cadastra um.
 */
$("#contasBancarias").submit(function (event) {
    event.preventDefault();
    cadastrarContaBancaria();
});

/**
 *  FIM AJAX
 */

function habilitarForm() {
    $(`form *`).prop("disabled", false);
    $(`.btn`).prop("disabled", false);
}

function desabilitarForm() {
    $('form *').prop('disabled', true);
    $('.btn').prop('disabled', true);
    $("#cliente *").prop("disabled", false);
}

/**
 * Preenche o formulário de acordo com o objeto passado.
 * 
 * @param {object} cliente 
 * @param {dom element} formulario 
 */
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

/**
 * Busca as unidades do cliente.
 * 
 * @param {int} clienteId - Id do cliente.
 */
function buscarUnidades(clienteId) {
    $.get(`../back-end/clientes/${clienteId}/unidades`, function (response) {
        cliente.unidades = JSON.parse(response);
    }).done(response => { popularUnidades(cliente.unidades) })
        .always(() => esconderModal())
        .fail(() => exibirErro("unidade"));
}

/**
 * Busca o endereço do cliente.
 * 
 * @param {*} clienteId - Id do cliente.
 * @param {*} callback - Callback para poder realizar uma ação após o término do processo.
 */
function buscarEndereco(clienteId, callback = null) {
    $.get(`../back-end/clientes/${clienteId}/enderecos`, function (response) {
        cliente.endereco = JSON.parse(response);
        if (callback) {
            callback();
        }
    });
}

/**
 * Busca as contas bancárias do cliente.
 * 
 * 
 * @param {*} clienteId - Id do cliente.
 * @param {*} callback - Um callback para realizar uma ação após o término da função.
 */
function buscarContas(clienteId, callback = null) {
    $.get(`../back-end/clientes/${clienteId}/contas-bancarias`, function (response) {
        cliente.contasBancarias = JSON.parse(response);
        popularContas(cliente.contasBancarias);
        if (callback) {
            callback();
        }
    });
}

/**
 * Preenche a tabela de unidades e atribui o click a cada linha.
 * 
 * @param {Array} unidades - Array de unidades do cliente.
 */
function popularUnidades(unidades) {
    $('#unidades tr').remove();
    for (const unidade of unidades) {
        var newRow = $(`<tr class='item' id=${unidade.id}>`);
        var cols = "";
        cols += `<td>${unidade.cnpj}</td>`;
        cols += `<td>${unidade.inscricao_estadual}</td>`;
        cols += `<td>${unidade.razao_social}</td>`;
        newRow.append(cols);
        $("#unidades").append(newRow)
    }
    $('#unidades tr').each((index, linha) => {
        $(linha).attr('onclick', `selecionarUnidade(${linha.id})`)
    });
}

function atualizarUnidade() {

    mostrarModal();

    $(`#unidade`).append(`<input hidden name='cliente_id' value=${cliente.id}>`);
    dados = $("#unidade").serialize();

    $.ajax({
        url: `../back-end/unidades/${unidade.id}`,
        type: 'PUT',
        data: dados
    }).done(() => {
        unidade = null;
        limparCamposUnidade();
        buscarUnidades(cliente.id);
    }).fail(() => exibirErro("unidade"))
        .always(() => esconderModal());
}

/**
 * Limpa os campos do formulário de unidade.
 */
function limparCamposUnidade() {
    $("#unidade :input").each((index, field) => {
        $(field).val("");
    });
    return;
}

/**
 * Popula o formulário com uma unidade escolhida.
 * 
 * @param {Object} unidade - Unidade do estabelecimento.
 */
function pupularUnidade(unidadeCliente) {
    unidade = unidadeCliente;
    compararFormCliente(unidadeCliente, "unidade");
}

/**
 * Seleciona uma unidade no array de unidades
 * 
 * @param {*} unidadeId - Id da unidade do estabelecimento. 
 */
function selecionarUnidade(unidadeId) {
    const unidade = _.find(cliente.unidades, { 'id': `${unidadeId}` });
    pupularUnidade(unidade);
}


/**
 * Cria uma tabela com as contas bancárias.
 * 
 * @param {*} contas - Array de contas bancárias.
 */
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

/**
 * 
 * Cadastros e Updates
 */

/**
 * Cadastra um cliente.
 */
function cadastrar() {
    mostrarModal();
    var dados = $('#cliente').serialize();
    $.post("../back-end/clientes", dados, response => {
        cliente = JSON.parse(response);
    }).done(
        () => { habilitarForm() }
    ).always(
        () => esconderModal()
    ).fail(
        () => exibirErro("cliente")
    );
}

/**
 * Cadastra uma unidade para o cliente.
 */
function cadastrarUnidade() {

    mostrarModal();
    $(`#unidade`).append(`<input hidden name='cliente_id' value=${cliente.id}>`);
    var dados = $("#unidade").serialize();

    $.post("../back-end/unidades", dados)
        .done(() => {
            buscarUnidades(cliente.id);
            limparCamposUnidade();
        }).always(
            () => esconderModal()
        ).fail(
            () => exibirErro("unidades")
        );
}

/**
 * Cadastra o endereço da unidade.
 */
function cadastrarEndereco() {
    mostrarModal();
    $(`#endereco`).append(`<input hidden name='cliente_id' value=${cliente.id}>`);
    var dados = $("#endereco").serialize();

    $.post("../back-end/clientes/enderecos", dados, function (response) {
        faturamento = JSON.parse(response);
    }).always(
        () => esconderModal()
    ).fail(
        () => exibirErro("endereco")
    );
}

/**
 * Cadastra uma conta bancária.
 */
function cadastrarContaBancaria() {
    $(`#contasBancarias`).append(`<input hidden name='cliente_id' value=${cliente.id}>`);
    mostrarModal();
    var dados = $("#contasBancarias").serialize();
    $.post(`../back-end/clientes/contas-bancarias`, dados, function (response) {
        esconderModal();
        buscarContas(cliente.id);
    });
}

/**
 * Atualiza um cliente.
 */
function atualizar() {
    var dados = $('#cliente').serialize();
    $.ajax({
        url: `../back-end/clientes/${cliente.id}`,
        type: 'PUT',
        data: dados
    });
}

/**
 * Atualiza o endereco do cliente.
 */
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

function esconderModal() {
    $('#modal-default').modal('hide');
}

function mostrarModal() {
    $('#modal-default').modal({ backdrop: 'static', keyboard: false });

}

