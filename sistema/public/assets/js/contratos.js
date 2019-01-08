$(document).ready(() => {
    contrato = JSON.parse(localStorage.getItem('contrato'));
    $('.select2').select2();
    $(".btn").text("Salvar");
    buscarProdutos();
    buscarUnidadesDeMedidas();
    buscarNumeroConfirmacao();

});

$("#contrato").submit(() => {
    event.preventDefault();
    if (temContratoL()) {
        atualizar();
    } else {
        cadastrar();
    }
});

$("#adendo").submit(() => {
    event.preventDefault();
    if (temAdendo()) {
        atualizarAdendo();
    } else {
        cadastrarAdendo();
    }
});

let contrato = null;
let produtos = null;
let adendos = null;

let adendo = null;
let numeros_confirmacao = null;

$("#produtos").change((event) => {
    selecionarProduto(event.target.value);
})

$('.minimal[name="futuro"]').on('ifChecked', event => {
    setNumeroConfirmacao();
});

function temContratoL() {
    return (contrato) ? true : false;
}

function temAdendo() {
    return (adendo) ? true : false;
}
/**
 * PRODUTOS
 */
function buscarProdutos() {
    $.get('../back-end/produtos')
        .done(response => {
            produtos = JSON.parse(response)
            popularProdutos(produtos);
        });
}

function popularProdutos(produtos) {
    $.each(produtos, (index, produto) => {
        const option = `<option value=${produto.id}>${produto.nome}</option>`;
        $("#produtos").append(option);
    })
}

function selecionarProduto(produtoId) {
    produto = _.find(produtos, { "id": produtoId });
    popularDescricao(produto);
}

function popularDescricao(produto) {
    $("#descricao").val(produto.descricao);
}

/**
 * FIM PRODUTOS
 */

/**
 * UNIDADES DE MEDIDA
 */
function buscarUnidadesDeMedidas() {
    $.get('../back-end/unidades-medidas')
        .done(response => popularUnidadesMedidades(JSON.parse(response)));
}

function popularUnidadesMedidades(unidades) {
    $.each(unidades, (index, unidade) => {
        const option = `<option value=${unidade.id}>${unidade.titulo}</option>`;
        $("#unidades").append(option);
    });
}

/**
 * FIM UNIDADE DE MEDIDA
 */
/**
 * NUMERO CONFIRMACAO
 */
function buscarNumeroConfirmacao() {
    $.get('../back-end/numero-confirmacao').done(response => {
        numeros_confirmacao = JSON.parse(response);
        if (temContratoL()) {
            (contrato.futuro) ? numero_confirmacao[1] = contrato.numero_confirmacao : numero_confirmacao[0] = contrato.numero_confirmacao;
        }
        setNumeroConfirmacao();
    })
}

function setNumeroConfirmacao() {
    if ($("input[name='futuro']:checked").val() == 1) {
        $(`:input[name='numero_confirmacao']`).val(numeros_confirmacao[1]);
    } else {
        $(`:input[name='numero_confirmacao']`).val(numeros_confirmacao[0]);
    }
}
/**
 * FIM NUMERO CONFIRMACAO
 */

function cadastrar() {
    mostrarModal();
    const dados = $("#contrato").serialize();
    $.post('../back-end/contratos', dados)
        .done(() => {
            alertCadastro();
            exibirSucesso();
        })
        .always(() => esconderModal())
        .fail(() => exibirErro());
}

function atualizar() {
    mostrarModal();
    const dados = $("#contrato").serialize();
    $.ajax({ type: 'PUT', url: `../back-end/contratos/${contrato.id}`, data: dados })
        .done(() => {
            alertCadastro();
            exibirSucesso();
        })
        .always(() => esconderModal())
        .fail(() => exibirErro());
}
/** FIM CONTRATO */

/** ADENDOS */

function cadastrarAdendo() {
    mostrarModal();
    $(`#adendo`).append(`<input hidden name='contrato_id' value=${contrato.id}>`);
    const dados = $("#adendo").serialize();
    $.post(`../back-end/contratos/adendos`, dados)
        .done(adendos => {
            adendos = JSON.parse(adendos);
            exibirSucesso();
            listarAdendos(adendos);
        })
        .fail(() => exibirErro())
        .always(() => esconderModal());
}

function listarAdendos(adendos) {
    $('#adendos tr').remove();
    for (const adendo of adendos) {
        var newRow = $(`<tr>`);
        var cols = "";
        cols += `<td class='item' id=${adendo.id}>${adendo.descricao}</td>`;
        cols += `<td class='delete' id=${adendo.id}><i class="fa fa-trash-o" style="color: red"></i></td>`
        newRow.append(cols);
        $("#adendos").append(newRow)
    }
    $('.item').each((index, td) => {
        $(td).attr('onclick', `selecionarAdendo(${td.id})`)
    });
    $('.delete').each((index, td) => {
        $(td).attr('onclick', `excluirAdendo(${td.id})`)
    });
}

function selecionarAdendo(adendoId) {
    adendo = _.find(adendos, { 'id': `${adendoId}` });
    compararForm(adendo, "adendo");
}

function excluirAdendo(adendoId) {
    mostrarModal();
    $.ajax({
        url: `../back-end/adendos/${adendoId}`,
        type: 'DELETE'
    }).done(adendos => {
        adendos = JSON.parse(adendos);
        listarAdendos(adendos)
    }).always(() => esconderModal());
}

function atualizarAdendo() {
    mostrarModal();
    const dados = $("#adendo").serialize();
    $.ajax({ type: 'PUT', url: `../back-end/contratos/${contrato.id}/adendos/${adendo}`, data: dados })
        .done(adendos => {
            alertCadastro();
            exibirSucesso();
            adendos = JSON.parse(adendos);
            listarAdendos(adendos);
        })
        .always(() => esconderModal())
        .fail(() => exibirErro());
}

/**
 * 
 */

function mostrarModal() {
    $('#modal-default').modal({ backdrop: 'static', keyboard: false });
}

function esconderModal() {
    $('#modal-default').modal('hide');
}

function alertCadastro() {
    $('.alert i').append("Cadastrado");
    $('.alert span').append("Cadastrado com sucesso!");
    $('.alert').show("fast", () => {
        setTimeout(() => {
            $('.alert').hide("slow");
        }, 5000);
    });
}


function exibirErro() {
    $(`#contrato .erro`).show("slow");
    setTimeout(() => {
        $(".erro").hide("slow");
    }, 2000);
}

function exibirSucesso() {
    $(`#contrato .success`).show("slow");
    setTimeout(() => {
        $(".success").hide("slow");
    }, 2000);
}

function compararContrato(contrato, formulario) {
    $.each(contrato, function (campo, valor) {
        form = $(`#${formulario}`).find('select, input, textarea');
        $(form).each(function (index, formObj) {
            if (typeof valor === "object" && valor) {
                compararContrato(valor, campo);
            }
            (formObj.name === campo) ? $(formObj).val(valor) : null;
        });
    });
}