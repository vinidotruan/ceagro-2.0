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
        }
    });
}

function popularVendedores(clientes) {
    $.each(clientes, function (index, cliente) {
        var option = '<option value="' + cliente.nome + '">' + cliente.nome + '</option>';
        $("#vendedores").append(option)
    })
}

function selecionarVendedor(event) {
    //loadsh
    vendedor = _.find(vendedores, ['nome', event.value]);
    buscarEndereco(vendedor.id);
    popularVendedor();
}

function popularVendedor() {
    $.each(vendedor, function (index, valor) {
        if ($(`#vendedor_${index}`)) {
            $(`#vendedor_${index}`).val(valor);
        }
    });
}
//Ruan deve revisar daqui pra baixo!
function popularCompradores(clientes) {
    $.each(clientes, function (index, cliente) {
        var option = '<option value="' + cliente.nome + '">' + cliente.nome + '</option>';
        $("#compradores").append(option)
    })
}

function selecionarComprador(event) {
    //loadsh
    comprador = _.find(compradores, ['nome', event.value]);
    buscarEndereco(comprador.id);
    popularComprador();
}

function popularComprador() {
    $.each(comprador, function (index, valor) {
        if ($(`#comprador${index}`)) {
            $(`#comprador_${index}`).val(valor);
        }
    });
}


function buscarEndereco(id) {
    $.ajax({
        url: `../back-end/clientes/${id}/enderecos`,
        type: "get",
        dataType: "json",
        success: function (data) {
            enderecos = data;
            popularVendedores(data);
        }
    });
}

