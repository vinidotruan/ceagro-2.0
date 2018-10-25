$("#formulario").submit(function (event) {
    event.preventDefault();
    console.log('dados');
    enviar();
});

console.log('logado');

function enviar() {
    var dados = $('#formulario').serialize();
    $.ajax({
        type: 'POST',
        url: '../back-end/produtos',
        data: dados,
        dataType: 'json',
        success: function (response) {
            console.log(response);
        }
    });
}

function buscar() {
    $.ajax({
        url: "../back-end/produtos",
        type: "get",
        dataType: "json",
        success: function (data) {
            popular(data);
            console.log(data);
        }
    });
}

function popular(produtos) {
    for (const produto of produtos) {
        var newRow = $("<tr>");
        var cols = "";
        cols += `<td>${produto.titulo}</td>`;
        newRow.append(cols);
        $("#produtos").append(newRow)

    }
}

function filtrar() {
    $(document).ready(function () {
        $("#filtro").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#produtos tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
}