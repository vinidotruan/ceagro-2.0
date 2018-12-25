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

$("#vendedor #cnpj,#razao_social").change(event => {
    selecionarUnidadeVendedor(event.target.value, unidadeVendedor => {
        popularEnderecoUnidadeVendedor(unidadeVendedor);
        popularInscEstUnidadeVendedor(unidadeVendedor);
    });
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

/**
 * Monta o datalist de compradores.
 * 
 * 
 * @param {obj} compradores - lista de compradores.
 */
function popularCompradores(compradores) {
    $.each(compradores, (index, comprador) => {
        const cliente = `<option value=${comprador.id}> ${comprador.nome_fantasia || comprador.razao_social}</option>`;
        $("#comprador .nomesFantasias").append(cliente);
    });
}

/**
 * Filtra um dentre os clientes para ser um comprador.
 * 
 * 
 * @param {int} compradorId - Id do comprador clicado.
 * @param {any} callback - um callback qualquer.
 */
function selecionarComprador(compradorId, callback) {
    comprador = _.find(clientes, {
        'id': compradorId
    });
    callback(comprador);
}

function selecionarUnidadeVendedor(compradorId, callback) {
    unidadeVendedor = _.find(vendedor.unidades, {
        'id': compradorId
    });
    callback(unidadeVendedor);
}

/**
 * Muda os calmpos de inscrição estadual, cnpj , razão social e endereço.
 * 
 * @param {} comprador - Um objeto de comprador.
 */
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
    popularEnderecoUnidadeVendedor(vendedor.unidades[0]);
    popularInscEstUnidadeVendedor(vendedor.unidades[0]);
    $.each(vendedor.unidades, (index, unidade) => {
        const cnpj = `<option value=${unidade.id}>${unidade.cnpj || "-"}</option>`;
        const razaoSocial = `<option value=${unidade.id}>${unidade.razao_social || "-"}</option>`;
        $("#vendedor .razoes").append(razaoSocial);
        $("#vendedor .cnpjs").append(cnpj);
    });
}

function popularEnderecoUnidadeVendedor(unidade) {
    $("#vendedor .enderecos option").remove();
    const endereco = `<option value=${unidade.id}>${unidade.endereco.cidade}(${unidade.endereco.estado}) | ${unidade.endereco.rua}</option>`;
    $("#vendedor .enderecos").append(endereco);
}

function popularInscEstUnidadeVendedor(unidade) {
    $("#vendedor .inscricoes option").remove();
    const inscricao_estadual = `<option value=${unidade.id} >${unidade.inscricao_estadual || "Não Cadastrada"}</option>`;
    $("#vendedor .inscricoes").append(inscricao_estadual);
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
