function adaptar() {
    $.ajax({
        url: `../back-end/adaptacao`,
        type: 'GET',
        success: function (response) {
            console.log(response);
        }
    });
}