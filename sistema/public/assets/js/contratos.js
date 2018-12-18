$(document).ready(() => {
    $('.select2').select2();
    $(".btn").text("Salvar");
    buscarProdutos();
    buscarUnidadesDeMedidas();
    buscarNumeroConfirmacao();

    if (localStorage.hasOwnProperty('contrato')) {
        contrato = localStorage.getItem('contrato');
        compararContrato();
    };
});

$("#contrato").submit(() => {
    event.preventDefault();
    if (temContrato()) {
        atualizar();
    } else {
        cadastrar();
    }
});

let contrato = null;
let produtos = null;
let numeros_confirmacao = null;

$("#produtos").change((event) => {
    selecionarProduto(event.target.value);
})

$('.minimal[name="futuro"]').on('ifChecked', () => {
    setNumeroConfirmacao();
});

function temContrato() {
    return (contrato) ? true : false;
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


function compararContrato(contrato, formulario) {
    console.log("teste");
    $.each(contrato, function (campo, valor) {
        $(`#${formulario}`).find('select, input, textarea').each(function (index, formObj) {
            if (typeof valor === "object" && valor) {
                compararContrato(valor, campo);
            }
            (formObj.name === campo) ? $(formObj).val(valor) : "";
        });
    });
}

function cadastrar() {
    mostrarModal();
    const dados = $("#contrato").serialize();
    $.post('../back-end/contratos', dados)
        .done(() => {
            alertCadastro();
        })
        .always(() => esconderModal())
        .fail(() => exibirErro());
}

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