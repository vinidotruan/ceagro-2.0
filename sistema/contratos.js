$("#formulario").submit(function (event) {
    event.preventDefault();
    enviar();
});

vendedores = [];
enderecos = [];
vendedor = [];
var compradores = [];

function enviar() {
    var dados = $('#formulario').serialize();
    console.log('dados');
    $.ajax({
        type: 'POST',
        url: '../back-end/contrato',
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
            popularVendedores(data);
            popularVendedoresCnpjs(data);
        }
    });
}

function popularVendedores(clientes) {
    $.each(clientes, function (index, cliente) {
        var option = '<option value="' + cliente.nome + '">' + cliente.nome + '</option>';
        $("#vendedores").append(option)
    })
}

function popularVendedoresCnpjs(clientes) {
    $.each(clientes, function (index, cliente) {
        var option = '<option value="' + cliente.cnpj + '">' + cliente.cnpj + '</option>';
        $("#vendedores_cnpjs").append(option)
    })
}

function selecionarVendedor(event) {
    //loadsh
    vendedor = _.find(vendedores, ['nome', event.value]);
    popularVendedor();
}

function selecionarCnpj(event) {
    //loadsh
    vendedor = _.find(vendedores, ['cnpj', event.value]);
    popularVendedor();
}

function popularVendedor() {
    $.each(vendedor, function (index, valor) {
        if ($(`#vendedor_${index}`)) {
            $(`#vendedor_${index}`).val(valor);
        }
    });
}

