$(document).ready(function () {

});

function buscarClientes() {
    $.get("../back-end/clientes", function (response) {
        clientes = JSON.parse(response);
        popularPesquisa(clientes);
    });
}

function popularPesquisa(clientes) {
    $.each(clientes, function (index, cliente) {
        var linha = `<tr id="${cliente.id}" class="clicavel">
            <td>${cliente.id}</td>
            <td>${cliente.razao_social}</td>
            <td>${cliente.cnpj}</td>
            <td>${cliente.inscricao_estadual}</td>
        </tr>`;

        $("#clientes").append(linha);
    });
    $(`#clientes tr`).on("click", function () {
        selecionarCliente(this.id);
    });
}

function selecionarCliente(cliente) {
    $.get(`../back-end/clientes/${cliente}/`, function (response) {
        cliente = JSON.parse(response);
        localStorage.setItem('cliente', JSON.stringify(cliente));
    }).success(function () {
        $(location).attr('href', 'clientes.php');
    });
}
