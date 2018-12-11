<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contrato</title>
</head>
<style>
*{
    margin: 0;
    padding:0;
    font-family: Arial;
    font-size: 11pt;
    text-align: justify;
}

body {
    margin-top: 2.5cm;
    margin-bottom: 2.5cm;
    margin-left: 3cm;
    margin-right: 3cm;
}

.data, .assinatura{
    float:right;
}

.assinatura {
    margin-right: 10%;
}

.confirmacao, .vendedor {
    margin-top: 3%;
}

.nome {
    float:left; background-color: red
}

td {
    margin-top: 5%
}

.comprador{
    margin-top:2%;
}

.produto{
    margin-top:2%;
}

.tdproduto{
    width:400px;
}

.tdquantidade{
    padding-top:20px;
}

.tdpreco{
    padding-top:20px;
}

.tdpagamento{
    padding-top:20px;
}

.tdpesoequalidade{
    padding-top:20px;
}

.aviso{
    padding-top:20px;
}

.tdcomissao{
    padding-top:20px;
}

.linha{
    padding-top:50px;
}

</style>
<body>
    <header>
        <div class="log">
            <img src="public/img/logo.png" alt="">
        </div>
        <div class="data">
            <?= $data ?>
        </div>
    </header>
    <section>
        <div class="confirmacao">
            <span>Confirmação número: <?= $contrato->id ?></span>
        </div>
    </section>
    <section>
        <div class="vendedor">
            <table>
                <tr>
                    <td>Vendedor: <?= $contrato->vendedor->razao_social ?></td>
                    <td>A/C: <?= $contrato->assinatura_vendedor ?></td>
                </tr>
                <tr>
                    <td>
                        Rua <?= ($contrato->vendedor->endereco()->rua) ? $contrato->vendedor->endereco()->rua . ", " . $contrato->vendedor->endereco()->numero :
                                $contrato->vendedor->endereco()->rua . ", " . $contrato->vendedor->endereco()->numero ?>
                    </td>
                </tr>
                <tr>
                    <td>
                    <?= ($contrato->vendedor->endereco()->cidade) ? $contrato->vendedor->endereco()->cidade : $contrato->vendedor->endereco()->cidade ?>
<?= ($contrato->vendedor->endereco()->estado) ? " - " . $contrato->vendedor->endereco()->estado : " - " . $contrato->vendedor->endereco()->estado ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        CNPJ: <?= $contrato->vendedor->cnpj ?>
                        Inscricao Estadual: <?= $contrato->vendedor->inscricao_estadual ?>
                    </td>
                </tr>
            </table>
        </div>
    </section>
    <section>
        <div class="comprador">
            <table>
                <tr>
                    <td>Comprador: <?= $contrato->comprador->razao_social ?></td>
                    <td>A/C: <?= $contrato->assinatura_comprador ?></td>
                </tr>
                <tr>
                    <td>
                        Rua <?= ($contrato->comprador->endereco()->rua) ? $contrato->comprador->endereco()->rua . ", " . $contrato->comprador->endereco()->numero :
                                $contrato->comprador->endereco()->rua . ", " . $contrato->comprador->endereco()->numero ?>
                    </td>
                </tr>
                <tr>
                    <td>
                    <?= ($contrato->comprador->endereco()->cidade) ? $contrato->comprador->endereco()->cidade : $contrato->comprador->endereco()->cidade ?>
<?= ($contrato->comprador->endereco()->estado) ? " - " . $contrato->comprador->endereco()->estado : " - " . $contrato->comprador->endereco()->estado ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        CNPJ: <?= $contrato->comprador->cnpj ?>
                        Inscricao Estadual: <?= $contrato->comprador->inscricao_estadual ?>
                    </td>
                </tr>
            </table>
        </div>
    </section>
    <section>
        <div class="produto">
            <table>
                <tr>
                    <td class="tdproduto">Produto: <?= $contrato->produto->nome ?></td>
                    <td>Safra: <?= $contrato->safra ?? "Nenhum" ?></td>
                </tr>
                <tr>
                    <td class="tdquantidade">Quantidade: <?= $contrato->quantidade ?></td>
                    <td class="tdquantidade">Descrição: <?= $contrato->descricao ?></td>
                </tr>
                <tr>
                    <td class="tdpreco">Preço: <?= $contrato->preco ?></td>
                    <td>Unidade de Medida: <?= $contrato->unidadeMedida->titulo ?></td>
                </tr>
                <tr>
                    <td class="tdpagamento">Pagamento: <?= $contrato->pagamento ?></td>
                </tr>
                <tr>
                    <td class="tdpesoequalidade">Peso e Qualidade: <?= $contrato->peso_qualidade ?? "Nenhum" ?></td>
                </tr>
                <tr>
                    <td class="aviso">
                    <?= (strlen($contrato->carregamento) > 0) ? $contrato->carregamento:"*A empresa compradora enviará a instrução de carregamento por e-mail.*"?>
                    </td>
                </tr>
                <tr>
                    <td class="tdcomissao">Comissão: <?= $contrato->comissao ?></td>
                </tr>
                <tr>
                    <td class="aviso">*Nós, como intermediadores, confirmamos que realizamos nesta data esta transação em seu nome com base nas leis e regulamentos. Qualquer discrepância deverá ser comunicada imediatamente*</td>
                </tr>
                <tr>
                    <td class="linha">_________________________<br>Assinatura do Comprador<br><?= $contrato->comprador->cnpj ?></td>
                    <td class="linha">_________________________<br>Assinatura do Vendedor<br><?= $contrato->vendedor->cnpj ?></td>
                </td>
                <tr>
                    <td></td>
                    <td></td>
                </td>
            </table>
        <div>
    </section>
</body>
</html>
