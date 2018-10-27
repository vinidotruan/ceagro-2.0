
var cliente = {};
var contatos = [{}];

function enviar() {
    var dados = $('#formulario').serialize();
    $.post("../back-end/clientes", dados)
        .success(function (response) {
            cliente = JSON.parse(response)[0];
        });
}

function cadastrarContato() {
    $(`#contatos`).append(`<input hidden name='cliente_id' value=${cliente.id}>`);
    var dados = $("#contatos").serialize();

    $.post("../back-end/clientes/contatos", dados)
        .success(function (response) {
            contatos = JSON.parse(response);
            popularContatos(contatos);
        });
}

function popularContatos(contatos) {
    $('#contatosLista .box-body').remove();
    $.each(contatos, function (index, contato) {
        var option = `<div class="box-body ">${contato.telefone} - ${contato.observacao}</div>`
        $("#contatosLista").append(option)
    })
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