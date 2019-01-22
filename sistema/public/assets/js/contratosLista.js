contratoId = null;

$("#deletarContrato").on('click', () => {
    $("#modal-default").modal('hide');
    deletarContrato();
});

function buscarContratos() {
    $.get("../back-end/contratos", { limite: 50 }, response => {
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
    $('#contratos tbody tr').remove();
    $.each(contratos, function (index, contrato) {
        var linha = `<tr id="${contrato.id}" class="clicavel">
            <td class="item" id="${contrato.id}">${contrato.numero_confirmacao}</td>
            <td class="item" id="${contrato.id}">${contrato.unidadeComprador.razao_social || "teste"}</td>
            <td class="item" id="${contrato.id}">${contrato.unidadeVendedor.razao_social}</td>
            <td class="item" id="${contrato.id}">${contrato.produto.nome}</td>
            <td style="text-align:center">
                <button type="button" class="btn btn-default">
                    <a href="../back-end/pdfs/contratos/${contrato.id}" target="_blank" rel="noopener noreferrer">
                        <i class="fa fa-download" aria-hidden="true" style="color:blue"></i>
                    </a>
                </button>
            </td>
            <td class="delete" style="text-align:center" id="${contrato.id}">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-aviso">
                    <i class="fa fa-trash-o" style="color: red"></i>
                </button>
            </td>
        </tr>`;

        $("#contratos tbody").append(linha);
    });
    $(`#contratos .item`).on("click", function () {
        irParaContratos(this.id);
    });
    $(`#contratos .delete`).on("click", function () {
        selecionarContrato(this.id);
    });
    (callback) ? callback() : "";
}

function selecionarContrato(ctId) {
    contratoId = ctId;
}

function irParaContratos(contrato) {
    $.get(`../back-end/contratos/${contrato}/`, response => {
        contrato = JSON.parse(response);
        localStorage.setItem('contrato', JSON.stringify(contrato));
        $(location).attr('href', 'contratos.php');
    });
}

function deletarContrato() {
    mostrarModal();
    $.ajax({
        url: `../back-end/contratos/${contratoId}`,
        type: 'DELETE'
    }).done(() =>
        buscarContratos()
    ).always(() => esconderModal());
}

/**
 * UI
 */
function esconderModal() {
    $('#modal-aviso').modal('hide');
}

function mostrarModal() {
    $('#modal-aviso').modal({ backdrop: 'static', keyboard: false });

}