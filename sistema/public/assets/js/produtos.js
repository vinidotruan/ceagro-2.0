$("#formulario").submit(function (event) {
    event.preventDefault();
    enviar();
});


function exibirLoader() {
    $("#loader").css('display', 'block');
}

function fecharLoader() {
    $("#loader").css('display', 'none');
}
function enviar() {
    var dados = $('#produtos').serialize();
    exibirLoader();
    $.ajax({
        type: 'POST',
        url: '../back-end/produtos',
        data: dados,
        dataType: 'json',
        success: function () {
            buscar();
        },
        done: () => {
            fecharLoader();
        }
    });
}

function buscar() {
    console.log($("#loader"));
    $("#loader").show();
    // exibirLoader();
    $.ajax({
        url: "../back-end/produtos",
        type: "get",
        dataType: "json",
        success: function (produtos) {
            popular(produtos);
        },
        done: () => {
            console.log("teste");
            fecharLoader();
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