$("#formulario").submit(function (event) {
    event.preventDefault();
    enviar();
});


function enviar() {
    var dados = $('#formulario').serialize();
    console.log('teste');
    $.ajax({
        type: 'POST',
        url: 'envia_email.php',
        data: dados,
        dataType: 'json',
        success: function (response) {
            $('#mensagem').css('display', 'block')
                .removeClass()
                .addClass(response.tipo)
                .html('')
                .html('<p>' + response.mensagem + '</p>');
        }
    });
}