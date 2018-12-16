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
        if (cliente.unidades.length > 0) {
            popularPorUnidade(cliente);
        } else {
            popularPorCliente(cliente);
        }
    });
    $(`#clientes tbody tr`).on("click", function () {
        selecionarCliente(this.id);
    });
    callback();
}

function popularPorUnidade(cliente) {
    $.each(cliente.unidades, (index, unidade) => {
        var linha = `<tr id="${cliente.id}" class="clicavel">
            <td>${cliente.nome_fantasia || 'Não há Registros'}</td>
            <td>${unidade.razao_social}</td>
            <td>${unidade.cnpj || 'Não há Registros'}</td>
            <td>${unidade.inscricao_estadual || 'Não há Registros'}</td>
            <td>${cliente.endereco.cidade || 'Não há Registros'}</td>
        </tr>`;

        $("#clientes tbody").append(linha);
    });
}

function popularPorCliente(cliente) {
    var linha = `<tr id="${cliente.id}" class="clicavel">
        <td>${cliente.nome_fantasia || 'Não há Registros'}</td>
        <td>${cliente.razao_social || 'Não há unidades cadastradas'}</td>
        <td>${cliente.cnpj || 'Não há Registros'}</td>
        <td>${cliente.inscricao_estadual || 'Não há Registros'}</td>
        <td>${cliente.endereco.cidade || 'Não há Registros'}</td>
    </tr>`;

    $("#clientes tbody").append(linha);
}

function selecionarCliente(cliente) {
    $.get(`../back-end/clientes/${cliente}`, function (response) {
        cliente = JSON.parse(response);
        localStorage.setItem('cliente', JSON.stringify(cliente));
        $(location).attr('href', 'clientes.php');
    });
}
