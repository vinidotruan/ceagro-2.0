$(document).ready(() => {
    buscarClientes();
});

$("#comprador #nomesFantasias").change(event => {
    selecionarComprador(event.target.value);
});

$("#vendedor #nomesFantasias").change(event => {
    selecionarVendedor(event.target.value);
});

let clientes = null;
let comprador = null;
let vendedor = null;

function buscarClientes() {
    $.get('../back-end/clientes')
        .done(response => {
            clientes = JSON.parse(response);
            popularCompradores(clientes);
            popularVendedores(clientes);
        })
        .always(() => $(".overlay").remove());
}

/**
 * COMPRADOR
 */
function popularCompradores(compradores) {
    $.each(compradores, (index, comprador) => {
        const cliente = `<option value=${comprador.id}> ${comprador.nome_fantasia || comprador.razao_social}</option>`;
        $("#comprador #nomesFantasias").append(cliente);
    });
}

function selecionarComprador(compradorId) {
    comprador = _.find(clientes, {
        'id': compradorId
    });
    popularUnidadesComprador(comprador);
}

function popularUnidadesComprador(comprador) {
    $("#comprador #cnpjs option").remove();
    $("#comprador #razoes option").remove();
    $.each(comprador.unidades, (index, unidade) => {
        const cnpj = `<option value=${unidade.id}>${unidade.cnpj || "-"}</option>`;
        $("#comprador #cnpjs").append(cnpj);
        const razaoSocial = `<option value=${unidade.id}>${unidade.razao_social || "-"}</option>`;
        $("#comprador #razoes").append(razaoSocial);
    });
}
/**
 * FIM COMPRADOR
 */

/**
 * VENDEDOR
 */
function popularVendedores(vendedores) {
    $.each(vendedores, (index, vendedor) => {
        const cliente = `<option value=${vendedor.id}> ${vendedor.nome_fantasia || vendedor.razao_social}</option>`;
        $("#vendedor #nomesFantasias").append(cliente);
    });
}

function selecionarVendedor(vendedorId) {
    vendedor = _.find(clientes, {
        'id': vendedorId
    });
    popularUnidadesVendedor(vendedor);
    buscarContasBancarias(vendedor.id);
}

function popularUnidadesVendedor(vendedor) {
    $("#vendedor #cnpjs option").remove();
    $("#vendedor #razoes option").remove();
    $.each(vendedor.unidades, (index, unidade) => {
        const cnpj = `<option value=${unidade.id}>${unidade.cnpj || "-"}</option>`;
        $("#vendedor #cnpjs").append(cnpj);
        const razaoSocial = `<option value=${unidade.id}>${unidade.razao_social || "-"}</option>`;
        $("#vendedor #razoes").append(razaoSocial);
    });
}
/**
 * FIM VENDEDOR
 */

function buscarContasBancarias(vendedorId) {
    $.get(`../back-end/clientes/${vendedorId}/contas-bancarias`)
        .done(response => popularContasBancarias(JSON.parse(response)))
}

function popularContasBancarias(contas) {
    $("#contas option").remove();
    $("#select2-contas-contais").remove();
    if (contas.length < 1) {
        const contas = `<option value=${null}>Não há conta cadastrada</option>`;
        $("#contas").append(contas);
        $("#contas").prop("disabled", true);
    } else {
        $("#contas").prop("disabled", false);
    }
    $.each(contas, (index, conta) => {
        const contas = `<option value=${conta.id}>${conta.conta} | ${conta.agencia} - ${conta.banco}</option>`;
        $("#contas").append(contas);
    });

}
