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