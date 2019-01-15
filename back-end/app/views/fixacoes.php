<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fixações</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12px !important;
        text-align: justify;
    }
    body {
        margin-top: 2.5cm;
        margin-bottom: 2.5cm;
        margin-left: 3cm;
        margin-right: 3cm;
    }
    .paddingTop20 {
        padding-top: 10px;
    }
    .linha {
        padding-top: 50px;
    }
    .center{
        padding-left:33.33%;
    }
</style>

<body>
    <header>
        <div class="log">
            <img src="public/img/logo.png" alt="">
        </div>
        <div class="data"> Porto Alegre
            <?= $data ?>
        </div>
    </header>
    <section>
        <div class="confirmacao">
            <span>Confirmação número: <strong><?= $contrato->numero_confirmacao ?></strong></span>
        </div>
    </section>
    <section>
        <table>
                <tr>
<<<<<<< HEAD
                    <td class="padding20">Id contrato: <?= $fixacao->id_contrato ?></td>
                </tr>
                <tr>
                    <td class="padding20">Descricao: <?= $fixacao->descricao ?></td>
                </tr>
                <tr>
                    <td class="padding20">Quantidade: <?= $fixacao->quantidade ?></td>
                </tr>
                <tr>
                    <td class="padding20">Preço: <?= $fixacao->preco ?></td>
                </tr>
                <tr>
                    <td class="padding20">Local de embarque: <?= $fixacao->local_embarque ?></td>
                </tr>
                <tr>
                    <td class="padding20">Contas bancárias: <?= $fixacao->contas_bancarias ?></td>
                </tr>
                <tr>
                    <td class="padding20">Data pagamento: <?= $fixacao->data_pagamento ?></td>
=======
                    <td class="padding20">Id contrato: <?= $adendos->id_contrato ?></td>
                </tr>
                <tr>
                    <td class="padding20">Descricao: <?= $adendos->descricao ?></td>
>>>>>>> master
                </tr>
            </table>
    </section>
</body>

</html>