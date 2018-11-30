function buscarContratos() {
    $.get("../back-end/contratos", { limite: 50 }, (response) => {
        contratos = JSON.parse(response);
        popularPesquisa(contratos, () => {
            $(function () {
                $('#contratos').DataTable();
                $(".overlay").remove();
            });
        });
    });
}

function popularPesquisa(contratos, callback = null) {
    $.each(contratos, function (index, contrato) {
        var linha = `<tr id="${contrato.id}" class="clicavel">
            <td class="item">${contrato.numero_confirmacao}</td>
            <td class="item">${contrato.comprador.razao_social}</td>
            <td class="item">${contrato.vendedor.razao_social}</td>
            <td class="item">${contrato.produto.nome}</td>
            <td style="text-align:center"><a href="../back-end/pdfs/contratos/${contrato.id}" target="_blank" rel="noopener noreferrer"><i class="fa fa-download" aria-hidden="true" style="color:blue"></i></a></td>
        </tr>`;

        $("#contratos tbody").append(linha);
    });
    $(`#contratos .item`).on("click", function () {
        selecionarContrato(this.id);
    });
    (callback) ? callback() : "";
}

function selecionarContrato(contrato) {
    $.get(`../back-end/contratos/${contrato}/`, function (response) {
        contrato = JSON.parse(response);
        localStorage.setItem('contrato', JSON.stringify(contrato));
        $(location).attr('href', 'contratos.php');
    });
}

function filtrar() {
    $(document).ready(function () {
        $("#filtro").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#contratos tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
}
