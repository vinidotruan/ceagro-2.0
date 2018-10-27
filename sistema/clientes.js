
var cliente = {};
var contatos = [{}];

function enviar() {
    var dados = $('#formulario').serialize();
    $.post("../back-end/clientes", dados)
        .success(function (response) {
            cliente = JSON.parse(response);
        });
}

function cadastrarContato() {
    $(`#contatos`).append(`<input hidden name='cliente_id' value=${cliente.id}>`);
    var dados = $("#contatos").serialize();
    $.post("../back-end/clientes/contatos", dados)
        .success(function (response) {
            cliente.contatos = JSON.parse(response);
            contatos = JSON.parse(response);
            console.log(contatos);
            // popularContatos();
        });
}

function buscar() {
    $.ajax({
        url: "../back-end/clientes",
        type: "get",
        dataType: "json",
        success: function (data) {
            popular(data);
            console.log(data);
        }
    });
}

function filtrar() {
    $(document).ready(function () {
        $("#filtro").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#clientes tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
}