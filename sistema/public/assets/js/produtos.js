$("#formulario").submit(function (event) {
    event.preventDefault();
    enviar();
});

function enviar() {
    var dados = $('#produtos').serialize();
    $.ajax({
        type: 'POST',
        url: '../back-end/produtos',
        data: dados,
        dataType: 'json',
        success: function () {
            buscar();
        }
    });
}

function buscar() {
    $.ajax({
        url: "../back-end/produtos",
        type: "get",
        dataType: "json",
        success: function (produtos) {
            popular(produtos);
        }
    });
}

function popular(produtos) {
    $('#produtos_lista .item').remove();
    for (const produto of produtos) {
        var newRow = $("<tr class='item'>");
        var cols = "";
        cols += `<td>${produto.nome}</td>`;
        cols += `<td>${produto.tipo}</td>`;
        cols += `<td>${produto.categoria}</td>`;
        newRow.append(cols);
        $("#produtos_lista").append(newRow)
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