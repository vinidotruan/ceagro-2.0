var cliente = {};
var contatos = [{}];
formsDisable();
buscarBancos();

function formsDisable() {
    $("#contatos :input").prop("disabled", true);
    $("#contatos :button").hide();
    $("#contatos").hide();
    $("#faturamento :input").prop("disabled", true);
    $("#faturamento :button").hide();
    $("#entrega :input").prop("disabled", true);
    $("#entrega :button").hide();
}

function habilitarForm(formulario) {
    $(`#${formulario} :input`).prop("disabled", false);
    $(`#${formulario} :button`).show();
}

function irPara(formulario) {
    $([document.documentElement, document.body]).animate({
        scrollTop: $(`#${formulario}`).offset().top
    }, 2000);
}

function enviar() {
    var dados = $('#formulario').serialize();
    $.post("../back-end/clientes", dados)
        .success(function (response) {
            cliente = JSON.parse(response)[0];
            irPara("faturamento");
            habilitarForm("faturamento");
            $("#contatos").hide();
            habilitarForm("contatos");
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

function cadastrarEnderecoFat() {
    $(`#faturamento`).append(`<input hidden name='cliente_id' value=${cliente.id}>`);
    var dados = $("#faturamento").serialize();
    $.post("../back-end/clientes/enderecos-faturamentos", dados)
        .success(function (response) {
            faturamento = JSON.parse(response);
            irPara("entrega");
            habilitarForm("entrega");
        });
}

function cadastrarEnderecoEnt() {
    $(`#entrega`).append(`<input hidden name='cliente_id' value=${cliente.id}>`);
    var dados = $("#entrega").serialize();
    $.post("../back-end/clientes/enderecos-entregas", dados)
        .success(function (response) {
            entrega = JSON.parse(response);

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
        }
    });
}

function buscarBancos() {
    $.ajax({
        url: "../back-end/clientes/bancos",
        type: "get",
        dataType: "json",
        success: function (data) {
            popularBancos(data);
        }
    });
}

function popularBancos(bancos) {
    $.each(bancos, function (index, banco) {
        var option = '<option value="' + banco.id + '">' + banco.nome + '</option>';
        $("#bancos").append(option)
    })
}

function popular(clientes) {
    for (const cliente of clientes) {
        var newRow = $("<tr>");
        var cols = "";
        cols += `<td>${cliente.id}</td>`;
        cols += `<td>${cliente.razao_social}</td>`;
        cols += `<td>${cliente.cnpj}</td>`;
        cols += `<td>${cliente.inscricao_estadual}</td>`;
        newRow.append(cols);
        $("#clientes").append(newRow)

    }
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