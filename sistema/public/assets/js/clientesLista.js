function buscar() {
    $.get("../back-end/clientes", function (response) {
        clientes = JSON.parse(response);
    }).done(() => {
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
            <td>${cliente.nome_fantasia || 'Não há Registros'}</td>
            <td>${cliente.cnpj || 'Não há Registros'}</td>
            <td>${cliente.inscricao_estadual || 'Não há Registros'}</td>
            <td>${cliente.endereco.cidade || 'Não há Registros'}</td>
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
        cliente = JSON.parse(response);
        localStorage.setItem('cliente', JSON.stringify(cliente));
        $(location).attr('href', 'clientes.php');
    });
}
