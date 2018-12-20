$(document).ready(() => {
    buscarClientes();

    if (localStorage.hasOwnProperty('contrato')) {
        contrato = JSON.parse(localStorage.getItem('contrato'));
        localStorage.removeItem('contrato');
        compararContrato(contrato, 'contrato');
    };
});

function temContrato() {
    return (localStorage.hasOwnProperty('contrato')) ? true : false;
}

$("#comprador .nomesFantasias").change(event => {
    selecionarComprador(event.target.value, cmp => popularUnidadesComprador(cmp));
});

$("#vendedor .nomesFantasias").change(event => {
    selecionarVendedor(event.target.value, vnd => popularUnidadesVendedor(vnd));
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

            if (temContrato()) {
                selecionarComprador(contrato.comprador_id, cmp => {
                    contrato.comprador = cmp;
                    compararContrato(contrato, 'contrato');
                    popularUnidadesComprador(cmp);
                });
                selecionarVendedor(contrato.vendedor_id, vnd => {
                    popularUnidadesVendedor(vnd);
                    popularUnidadesComprador(vnd);

                });
            }
        })
        .always(() => $(".overlay").remove());
}

/**
 * COMPRADOR
 */
function popularCompradores(compradores) {
    $.each(compradores, (index, comprador) => {
        const cliente = `<option value=${comprador.id}> ${comprador.nome_fantasia || comprador.razao_social}</option>`;
        $("#comprador .nomesFantasias").append(cliente);
    });
}

function selecionarComprador(compradorId, callback) {
    comprador = _.find(clientes, {
        'id': compradorId
    });
    callback(comprador);
}

function popularUnidadesComprador(comprador) {
    $("#comprador .cnpjs option").remove();
    $("#comprador .razoes option").remove();
    $.each(comprador.unidades, (index, unidade) => {
        const cnpj = `<option value=${unidade.id}>${unidade.cnpj || "-"}</option>`;
        const razaoSocial = `<option value=${unidade.id}>${unidade.razao_social || "-"}</option>`;
        const inscricao_estadual = `<option value=${unidade.id} >${unidade.inscricao_estadual || "Não Cadastrada"}</option>`;
        const endereco = `<option value=${unidade.id}>${unidade.endereco.cidade}(${unidade.endereco.estado}) | ${unidade.endereco.rua}</option>`;
        $("#comprador .razoes").append(razaoSocial);
        $("#comprador .inscricoes").append(inscricao_estadual);
        $("#comprador .cnpjs").append(cnpj);
        $("#comprador .enderecos").append(endereco);
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
        $("#vendedor .nomesFantasias").append(cliente);
    });
}

function selecionarVendedor(vendedorId, callback) {
    vendedor = _.find(clientes, {
        'id': vendedorId
    });
    callback(vendedor);
    buscarContasBancarias(vendedor.id);
}

function popularUnidadesVendedor(vendedor) {
    $("#vendedor .cnpjs option").remove();
    $("#vendedor .razoes option").remove();
    $("#vendedor .inscricoes option").remove();
    $.each(vendedor.unidades, (index, unidade) => {
        const cnpj = `<option value=${unidade.id}>${unidade.cnpj || "-"}</option>`;
        const razaoSocial = `<option value=${unidade.id}>${unidade.razao_social || "-"}</option>`;
        const inscricao_estadual = `<option value=${unidade.id} >${unidade.inscricao_estadual || "Não Cadastrada"}</option>`;
        const endereco = `<option value=${unidade.id}>${unidade.endereco.cidade}(${unidade.endereco.estado}) | ${unidade.endereco.rua}</option>`;
        $("#vendedor .razoes").append(razaoSocial);
        $("#vendedor .inscricoes").append(inscricao_estadual);
        $("#vendedor .cnpjs").append(cnpj);
        $("#vendedor .enderecos").append(endereco);
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

/**
 * 
 * 
 */

function compararContrato(contrato, formulario) {
    $.each(contrato, function (campo, valor) {
        form = $(`#${formulario}`).find('select, input, textarea');
        $(form).each(function (index, formObj) {
            if (typeof valor === "object" && valor) {
                compararContrato(valor, campo);
            }
            (formObj.name === campo) ? $(formObj).val(valor) : "";
        });
    });
}
