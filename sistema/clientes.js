$("#formulario").submit(function (event) {
    event.preventDefault();
    console.log('dados');
    enviar();
});


function enviar() {
    var dados = $('#formulario').serialize();
    $.ajax({
        type: 'POST',
        url: '../back-end/clientes',
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
            popular(data);
            console.log(data);
        }
    });
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