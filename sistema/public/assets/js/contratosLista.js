$(document).ready(function () {

});

function buscarContratos() {
    $.get("../back-end/contratos", function (response) {
        contratos = JSON.parse(response);
        popularPesquisa(contratos);
    });
}

function popularPesquisa(contratos) {
    $.each(contratos, function (index, contrato) {
        var linha = `<tr id="${contrato.id}" class="clicavel">
            <td>${contrato.numero}</td>
            <td>${contrato.comprador.nome}</td>
            <td>${contrato.vendedor.nome}</td>
            <td>${contrato.produto.nome}</td>
        </tr>`;

        $("#contratos").append(linha);
    });
    $(`#contratos tr`).on("click", function () {
        selecionarContrato(this.id);
    });
}

function selecionarContrato(contrato) {
    $.get(`../back-end/contratos/${contrato}/`, function (response) {
        contrato = JSON.parse(response);
        localStorage.setItem('contrato', JSON.stringify(contrato));
    }).success(function () {
        $(location).attr('href', 'contratos.php');
    });
}
