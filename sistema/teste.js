$("#formulario").submit(function (event) {
    event.preventDefault();
    console.log('teste');
    enviar();
});


function enviar() {
    var dados = $('#formulario').serialize();
    console.log('teste');
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