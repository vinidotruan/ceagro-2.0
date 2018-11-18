$("#contrato").submit(function (event) {
    event.preventDefault();
    if (temContrato()) {
        atualizar();
    } else {
        cadastrar();
    }

});

vendedores = [];
compradores = [];
produtos = [];
vendedor = {};
comprador = {};
produto = {};
contrato = {};

function verificarContrato() {
    buscarClientes(() => {
        contrato = JSON.parse(localStorage.getItem("contrato"));
        // localStorage.removeItem("contrato");
        if (temContrato()) {
            $("#enviar").val("Atualizar");
            comprador = contrato.comprador;
            vendedor = contrato.vendedor;
            produto = contrato.produto;
            compararContrato(contrato, "contrato");
            $('.select2').select2();
        } else {
            $("#enviar").val("Cadastrar");
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
            (campo === formObj.name) ? $(formObj).val(valor) : "";
        });
    });
}

function cadastrar() {
    $(`#contrato`).append(`<input hidden name='comprador_id' value=${comprador.id}>`);
    $(`#contrato`).append(`<input hidden name='vendedor_id' value=${vendedor.id}>`);
    $(`#contrato`).append(`<input hidden name='produto_id' value=${produto.id}>`);
    var dados = $('#contrato').serialize();
    $.post('../back-end/contratos', dados).success(function (response) {
    });
}

function atualizar() {
    $(`#contrato`).append(`<input hidden name='comprador_id' value=${comprador.id}>`);
    $(`#contrato`).append(`<input hidden name='vendedor_id' value=${vendedor.id}>`);
    $(`#contrato`).append(`<input hidden name='produto_id' value=${produto.id}>`);
    var dados = $('#contrato').serialize();

    $.ajax({
        url: `../back-end/contratos/${contrato.id}`,
        type: 'PUT',
        data: dados,
        success: function (response) {
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
    console.log("teste");
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
        var option = '<option value="' + unidade.id + '">' + unidade.titulo + '</option>';
        $("#unidades").append(option)
    })
}

function popularProdutos(produtos) {
    $.each(produtos, function (index, produto) {
        var option = '<option value="' + produto.nome + '">' + produto.nome + '</option>';
        $("#produtos").append(option)
    })
}