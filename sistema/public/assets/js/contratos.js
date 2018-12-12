$('.select2').select2();

$("#contrato").submit(function (event) {
    event.preventDefault();
    if (temContrato()) {
        $(`#unidades`).val(contrato.unidade_medida_id);
        $(`#select2-unidades-container`).append(contrato.unidade_medida_id);
        atualizar();
    } else {
        cadastrar();
    }
});

vendedores = [];
compradores = [];
contasBancarias = [{}]
adendos = [];
produtos = [];
vendedor = {};
comprador = {};
produto = {};
conta = {};
contrato = {};

function adicionarAdendo() {
    $(`#adendos`).append(`<input hidden name='contrato_id' value=${contrato.id}>`);
    var dados = $('#adendos').serialize();
    $.post(`../back-end/adendos`, dados, (success) => {
        popularAdendos(JSON.parse(success));
    });
}

function verificarContrato() {
    buscarDados(() => {
        contrato = JSON.parse(localStorage.getItem("contrato"));
        // localStorage.removeItem("contrato");
        if (temContrato()) {
            $("#enviar").append("Atualizar");
            comprador = contrato.comprador;
            vendedor = contrato.vendedor;
            produto = contrato.produto;
            adendos = contrato.adendos;

            compararContrato(contrato, "contrato");
            $('.select2').select2();
            popularAdendos(adendos, mostrarAdendos());
        } else {
            $("#enviar").append("Cadastrar");
        }
    }, erro => {
        console.log(erro);
    });
}

function buscarDados(callback) {
    buscarProdutos();
    buscarUnidadesDeMedidas();
    buscarClientes(_ => {
        callback();
        buscarContasBancaria();
    });

}

function mostrarAdendos() {
    $("#edit").show();
}

function popularAdendos(adendos, callback) {
    $('#adendo tr').remove();
    $.each(adendos, function (index, adendo) {
        var adendos = '<tr><td colspan="1" value="' + adendo.id + '" class="item">' + adendo.descricao + '</td><td onclick="deletarAdendo(' + adendo.id + ')"><i class="fa fa-trash" aria-hidden="true"></i></td><tr>';
        $("#adendo").append(adendos)
    });

    (callback) ? callback() : '';
}

function deletarAdendo(id) {
    $.ajax({
        url: `../back-end/contratos/${contrato.id}/adendos/${id}`,
        type: 'DELETE',
        success: function (adendos) {
            popularAdendos(JSON.parse(adendos));
        }
    });
}

function temContrato() {
    if (contrato) {
        return true;
    }
    return false;
}

function compararContrato(contrato, formulario) {
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
    $('#modal-default').modal({ backdrop: 'static', keyboard: false });
    $(`#contrato`).append(`<input hidden name='comprador_id' value=${comprador.id}>`);
    $(`#contrato`).append(`<input hidden name='vendedor_id' value=${vendedor.id}>`);
    $(`#contrato`).append(`<input hidden name='produto_id' value=${produto.id}>`);
    $(`#contrato`).append(`<input hidden name='vendedor_conta_bancaria_Id' value=${conta.id}>`);
    var dados = $('#contrato').serialize();
    $.post('../back-end/contratos', dados, () => {
        alertCadastro();
    });
}

function alertCadastro() {
    $('#modal-default').modal('hide');
    $('.alert i').append("Cadastrado");
    $('.alert span').append("Cadastrado com sucesso!");
    $('.alert').show("fast", () => {
        setTimeout(() => {
            $('.alert').hide("slow");
        }, 5000);
    });
}

function alertAtualizar() {
    $('#modal-default').modal('hide');
    $('.alert i').append("Atualizado");
    $('.alert span').append("Atualizado com sucesso!");
    $('.alert').show("fast", () => {
        setTimeout(() => {
            $('.alert').hide("slow");
        }, 5000);
    });
}

function atualizar() {
    $('#modal-default').modal({ backdrop: 'static', keyboard: false });
    $(`#contrato`).append(`<input hidden name='comprador_id' value=${comprador.id}>`);
    $(`#contrato`).append(`<input hidden name='vendedor_id' value=${vendedor.id}>`);
    $(`#contrato`).append(`<input hidden name='vendedor_conta_bancaria_id' value=${conta.id}>`);
    $(`#contrato`).append(`<input hidden name='produto_id' value=${produto.id}>`);
    var dados = $('#contrato').serialize();
    $.ajax({
        url: `../back-end/contratos/${contrato.id}`,
        type: 'PUT',
        data: dados,
        success: function () {
            alertAtualizar();
        }
    });
}

function buscarClientes(callback) {
    $.ajax({
        url: "../back-end/clientes",
        type: "get",
        dataType: "json",
        success: response => {
            clientes = response;
            popularClientes(clientes);
            $(".overlay").remove();
            callback();

        }
    });
}

function buscarContasBancaria() {
    $.ajax({
        url: `../back-end/clientes/${vendedor.id}/contas-bancarias`,
        type: "get",
        dataType: "json",
        success: response => {
            contasBancarias = response;
            popularContasBancarias(contasBancarias);
        }
    });
}

function popularContasBancarias(contas) {
    $(`#contas`).val();
    $(`#contas option`).remove();
    $(`#select2-contas-container`).empty();
    $.each(contas, function (index, conta) {
        if (conta) {
            var contas = `<option value="${conta.id}">${conta.conta} | ${conta.agencia} - ${conta.banco}</option>`;
            $("#contas").append(contas)
        }
    });

    if (temContrato()) {
        selecionarConta(contrato.vendedor_conta_bancaria_id);
        mudarSelectConta(conta);
    }
}

function popularClientes(compradores) {
    $.each(compradores, function (index, comprador) {
        if (comprador.cnpj) {
            var cnpjs = '<option value="' + comprador.cnpj + '">' + comprador.cnpj + '</option>';
            $(".cliente #cnpjs").append(cnpjs)
        }
        if (comprador.razao_social) {
            var razoes = '<option value="' + comprador.razao_social + '">' + comprador.razao_social + '</option>';
            $(".cliente #razoes").append(razoes)
        }
    })
}

function popularVendedores(vendedores) {
    $.each(vendedores, function (index, vendedor) {
        if (vendedor.cnpj) {
            var cnpjs = '<option value="' + vendedor.cnpj + '">' + vendedor.cnpj + '</option>';
            $("#vendedor #cnpjs").append(cnpjs)
        }
        if (vendedor.razao_social) {
            var razoes = '<option value="' + vendedor.razao_social + '">' + vendedor.razao_social + '</option>';
            $("#vendedor #razoes").append(razoes);
        }
    });
}

function buscarProdutos() {
    $.ajax({
        url: "../back-end/produtos",
        type: "get",
        dataType: "json",
        success: function (data) {
            produtos = data;
            popularProdutos(produtos);

        }
    });
}

function buscarUnidadesDeMedidas() {
    $.ajax({
        url: "../back-end/unidades-medidas",
        type: "get",
        dataType: "json",
        success: function (data) {
            unidadesMedidas = data;
            popularUnidadesMedidas(unidadesMedidas);
        }
    });
}

function popularUnidadesMedidas(unidades) {
    $.each(unidades, function (index, unidade) {
        var option = '<option value=' + unidade.id + '>' + unidade.titulo + '</option>';
        $("#unidades").append(option)
    });
}

function popularProdutos(produtos) {
    $.each(produtos, function (index, produto) {
        var option = '<option value="' + produto.id + '">' + produto.nome + '</option>';
        $("#produtos").append(option)
    });
}

function selecionarVendedor(campo) {
    vendedor = _.find(clientes, {
        'cnpj': $(`#vendedor select[name='${campo}'] option:selected`).text()
    }) || _.find(clientes, {
        'razao_social': $(`#vendedor select[name='${campo}'] option:selected`).text()
    });
    (campo === 'cnpj') ? mudarSelectRazoes('vendedor') : mudarSelectCnpjs('vendedor');
    buscarContasBancaria(vendedor);
}

function selecionarComprador(campo) {
    comprador = _.find(clientes, {
        'cnpj': $(`#comprador select[name='${campo}'] option:selected`).text()
    }) || _.find(clientes, {
        'razao_social': $(`#comprador select[name='${campo}'] option:selected`).text()
    });
    (campo === 'cnpj') ? mudarSelectRazoes('comprador') : mudarSelectCnpjs('comprador');
}

function selecionarProduto() {
    produto = _.find(produtos, {
        'nome': $(`#produto select[name='produto_id'] option:selected`).text()
    });

    $("#produto textarea[name='descricao']").text(produto.descricao);
}

function selecionarConta() {
    conta = _.find(contasBancarias, {
        'id': $(`#contas`).val()
    });

    contrato.contaBancaria = conta;
}

function mudarSelectConta(conta) {
    contaT = `${conta.conta} | ${conta.agencia} - ${conta.banco}`;
    $(`#contas`).val(contaT);
    $(`#select2-contas-container`).append(contaT);
}

function mudarSelectRazoes(variavel) {
    if (variavel == "vendedor") {
        $(`#vendedor #razoes`).val();
        $(`#vendedor #select2-razoes-container`).empty();
        $(`#vendedor #razoes`).val(vendedor.razao_social);
        $(`#vendedor #select2-razoes-container`).append(vendedor.razao_social);
    } else {
        $(`#comprador #razoes`).val();
        $(`#comprador #select2-razoes-container`).empty();
        $(`#comprador #razoes`).val(comprador.razao_social);
        $(`#comprador #select2-razoes-container`).append(comprador.razao_social);
    }
}

function mudarSelectCnpjs(variavel) {
    if (variavel == "vendedor") {
        $(`#vendedor #cnpjs`).val();
        $(`#vendedor #select2-cnpjs-container`).empty();
        $(`#vendedor #cnpjs`).val(vendedor.cnpj);
        $(`#vendedor #select2-cnpjs-container`).append(vendedor.cnpj);
    } else {
        $(`#comprador #cnpjs`).val();
        $(`#comprador #select2-cnpjs-container`).empty();
        $(`#comprador #cnpjs`).val(comprador.cnpj);
        $(`#comprador #select2-cnpjs-container`).append(comprador.cnpj);
    }
}
