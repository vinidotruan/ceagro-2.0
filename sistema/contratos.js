$("#formulario").submit(function (event) {
    event.preventDefault();
    enviar();
});


function enviar() {
    var dados = $('#formulario').serialize();
    console.log('dados');
    $.ajax({
        type: 'POST',
        url: '../back-end/contrato',
        data: dados,
        dataType: 'json',
        success: function (response) {
            console.log(response);
        }
    });
}