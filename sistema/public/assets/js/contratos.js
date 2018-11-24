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
adendos = [];
produtos = [];
vendedor = {};
comprador = {};
produto = {};
contrato = {};

function adicionarAdendo() {
    $(`#adendos`).append(`<input hidden name='contrato_id' value=${contrato.id}>`);
    var dados = $('#adendos').serialize();
    $.post(`../back-end/adendos`, dados, (success) => {
        popularAdendos(JSON.parse(success));
    });
}

function verificarContrato() {
    buscarClientes(() => {
        contrato = JSON.parse(localStorage.getItem("contrato"));
        localStorage.removeItem("contrato");
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

function mostrarAdendos() {
    $("#edit").show();
}

function popularAdendos(adendos, callback) {
    $('#adendo tr').remove();
    $.each(adendos, function (index, adendo) {
        var adendos = '<tr><td colspan="1" value="' + adendo.id + '" class="item">' + adendo.descricao + '</td><td onclick="deletarAdendo(' + adendo.id + ')"><i class="fa fa-trash" aria-hidden="true"></i></td><tr>';
        $("#adendo").append(adendos)
    })
    callback();
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
        success: function (data) {
            vendedores = data;
            compradores = data;
            popularClientes(vendedores);
            buscarProdutos();
            buscarUnidadesDeMedidas();
            $(".overlay").remove();
            callback();
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

function popularClientes(clientes) {
    $.each(clientes, function (index, cliente) {
        var cnpjs = '<option value="' + cliente.cnpj + '">' + cliente.cnpj + '</option>';
        var razoes = '<option value="' + cliente.razao_social + '">' + cliente.razao_social + '</option>';
        $("#comprador #razoes").append(razoes)
        $("#vendedor #razoes").append(razoes)
        $("#comprador #cnpjs").append(cnpjs)
        $("#vendedor #cnpjs").append(cnpjs)
    })
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

function selecionarCliente(campo, array) {
    if (array == "vendedores") {
        variavel = "vendedor";
        vendedor = _.find(vendedores, {
            'cnpj': $(`#vendedor select[name='${campo}'] option:selected`).text()
        }) || _.find(vendedores, {
            'razao_social': $(`#vendedor select[name='${campo}'] option:selected`).text()
        });
    } else {
        variavel = "comprador";
        comprador = _.find(compradores, {
            'cnpj': $(`#comprador select[name='${campo}'] option:selected`).text()
        }) || _.find(compradores, {
            'razao_social': $(`#comprador select[name='${campo}'] option:selected`).text()
        });

    }
    (campo === 'cnpj') ? mudarSelectRazoes(variavel) : mudarSelectCnpjs(variavel);
}

function selecionarProduto() {
    produto = _.find(produtos, {
        'nome': $(`#produto select[name='produto_id'] option:selected`).text()
    });
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
