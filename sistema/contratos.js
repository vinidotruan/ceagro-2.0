$("#formulario").submit(function (event) {
    event.preventDefault();
    enviar();
});

vendedores = [];
compradores = [];
produtos = [];
vendedor = {};
comprador = {};
produto = {};

function enviar() {
    $(`#formulario`).append(`<input hidden name='cliente_comprador_id' value=${comprador.id}>`);
    $(`#formulario`).append(`<input hidden name='cliente_vendedor_id' value=${vendedor.id}>`);
    $(`#formulario`).append(`<input hidden name='produto_id' value=${produto.id}>`);
    var dados = $('#formulario').serialize();
    $.ajax({
        type: 'POST',
        url: '../back-end/contratos',
        data: dados,
        dataType: 'json',
        success: function (response) {
            console.log(response);
        }
    });
}

function buscar() {
    $.ajax({
        url: "../back-end/clientes",
        type: "get",
        dataType: "json",
        success: function (data) {
            vendedores = data;
            compradores = data;
            popularVendedores(vendedores);
            popularVendedoresCnpjs(vendedores);
            popularCompradores(compradores);
            popularCompradoresCnpjs(compradores);
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

function popularVendedores(clientes) {
    $.each(clientes, function (index, cliente) {
        var option = '<option value="' + cliente.nome + '">' + cliente.nome + '</option>';
        $("#vendedores").append(option)
    })
}

function popularProdutos(produtos) {
    $.each(produtos, function (index, produto) {
        var option = '<option value="' + produto.titulo + '">' + produto.titulo + '</option>';
        $("#produtos").append(option)
    })
}

function selecionarProduto(event) {
    //loadsh
    produto = _.find(produtos, ['titulo', event.value]);
}

function popularCompradores(clientes) {
    $.each(clientes, function (index, cliente) {
        var option = '<option value="' + cliente.nome + '">' + cliente.nome + '</option>';
        $("#compradores").append(option)
    })
}

function popularVendedoresCnpjs(clientes) {
    $.each(clientes, function (index, cliente) {
        var option = '<option value="' + cliente.cnpj + '">' + cliente.cnpj + '</option>';
        $("#vendedores_cnpjs").append(option)
    })
}

function popularVendedor() {
    $.each(vendedor, function (index, valor) {
        if ($(`#vendedor > #${index}`)) {
            $(`#vendedor input#${index}`).val(valor);
        }
    });
}

function popularCompradoresCnpjs(clientes) {
    $.each(clientes, function (index, cliente) {
        var option = '<option value="' + cliente.cnpj + '">' + cliente.cnpj + '</option>';
        $("#compradores_cnpjs").append(option)
    })
}

function selecionarVendedor(event) {
    //loadsh
    vendedor = _.find(vendedores, ['nome', event.value]);
    popularVendedor();
}

function selecionarCnpjVendedor(event) {
    //loadsh
    vendedor = _.find(vendedores, ['cnpj', event.value]);
    popularVendedor();
}

function selecionarComprador(event) {
    //loadsh
    comprador = _.find(compradores, ['nome', event.value]);
    popularComprador();
}

function selecionarCnpjComprador(event) {
    //loadsh
    comprador = _.find(compradores, ['cnpj', event.value]);
    popularComprador();
}

function popularComprador() {
    $.each(comprador, function (index, valor) {
        if ($(`#comprador input#${index}`)) {
            $(`#comprador input#${index}`).val(valor);
        }
    });
}