$(document).ready(function () {

});

function buscar() {
    $.get("../back-end/clientes", function (response) {
        clientes = JSON.parse(response);
        popularPesquisa(clientes, () => {
            $(function () {
                $('#clientes').DataTable();
                $(".overlay").remove();
            })
        });
    });
}

function popularPesquisa(clientes, callback) {
    $.each(clientes, function (index, cliente) {
        var linha = `<tr id="${cliente.id}" class="clicavel">
            <td>${cliente.razao_social}</td>
            <td>${cliente.cnpj}</td>
            <td>${cliente.inscricao_estadual}</td>
        </tr>`;

        $("#clientes tbody").append(linha);
    });
    $(`#clientes tbody tr`).on("click", function () {
        selecionarCliente(this.id);
    });
    callback();
}

function selecionarCliente(cliente) {
    $.get(`../back-end/clientes/${cliente}`, function (response) {
        console.log(response);
        cliente = JSON.parse(response);
        localStorage.setItem('cliente', JSON.stringify(cliente));
        $(location).attr('href', 'clientes.php');
    });
}
