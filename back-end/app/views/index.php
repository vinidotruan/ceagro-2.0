<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    * {
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
    .data, .assinatura {float:right;}

    .assinatura {margin-right: 10%;}

    .confirmacao, .vendedor {margin-top: 3%;}

    .nome {float:left; background-color: red}

    td {margin-top: 5%}

</style>
<body>
    <header>
        <div class="log">
            <img src="public/img/logo.png" alt="">
        </div>
        <div class="data">
            <?=$data?>
        </div>
    </header>
    <section>
        <div class="confirmacao">
            <span>Confirmação número: <?=$contrato->codigo?></span>
        </div>
    </section>
    <section>
        <div class="vendedor">
            <table>
                <tr>
                    <td>Vendedor: <?=$contrato->vendedor->razao_social?></td>
                    <td>A/C: <?=$contrato->assinatura_vendedor?></td>
                </tr>
                <tr>
                    <td>
                        Rua <?=($contrato->vendedor->enderecoEntrega->rua) ? $contrato->vendedor->enderecoEntrega->rua . ", " . $contrato->vendedor->enderecoEntrega->numero :
$contrato->vendedor->enderecoFaturamento->rua . ", " . $contrato->vendedor->enderecoFaturamento->numero?>
                    </td>
                </tr>
                <tr>
                    <td>
                    <?=($contrato->vendedor->enderecoEntrega->cidade) ? $contrato->vendedor->enderecoEntrega->cidade : $contrato->vendedor->enderecoFaturamento->cidade?>
<?=($contrato->vendedor->enderecoEntrega->estado) ? " - " . $contrato->vendedor->enderecoEntrega->estado : " - " . $contrato->vendedor->enderecoFaturamento->estado?>
                    </td>
                </tr>
                <tr>
                    <td>
                        CNPJ: <?=$contrato->vendedor->cnpj?>
                        Inscricao Estadual: <?=$contrato->vendedor->inscricao_estadual?>
                    </td>
                </tr>
            </table>
        </div>
    </section>
    <section>
        <div class="comprador">
            <table>
                <tr>
                    <td>Vendedor: <?=$contrato->vendedor->razao_social?></td>
                    <td>A/C: <?=$contrato->assinatura_vendedor?></td>
                </tr>
                <tr>
                    <td>
                        Rua <?=($contrato->vendedor->enderecoEntrega->rua) ? $contrato->vendedor->enderecoEntrega->rua . ", " . $contrato->vendedor->enderecoEntrega->numero :
$contrato->vendedor->enderecoFaturamento->rua . ", " . $contrato->vendedor->enderecoFaturamento->numero?>
                    </td>
                </tr>
                <tr>
                    <td>
                    <?=($contrato->vendedor->enderecoEntrega->cidade) ? $contrato->vendedor->enderecoEntrega->cidade : $contrato->vendedor->enderecoFaturamento->cidade?>
<?=($contrato->vendedor->enderecoEntrega->estado) ? " - " . $contrato->vendedor->enderecoEntrega->estado : " - " . $contrato->vendedor->enderecoFaturamento->estado?>
                    </td>
                </tr>
                <tr>
                    <td>
                        CNPJ: <?=$contrato->vendedor->cnpj?>
                        Inscricao Estadual: <?=$contrato->vendedor->inscricao_estadual?>
                    </td>
                </tr>
            </table>
        </div>
    </section>
</body>
</html>
