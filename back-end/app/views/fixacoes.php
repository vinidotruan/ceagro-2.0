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
        <div class="data paddingTop20"><strong> Porto Alegre
            <?= $data ?></strong>
        </div>
    </header>
    <section>
    <?php
    foreach($fixacoes as $fixacao){
    ?>
        <table>
            <tr>
                <td class="paddingTop20">Quantidade: <?= $fixacao->quantidade ?></td>
            </tr>
            <tr>
                <td class="paddingTop20">Preço: <?= $fixacao->preco ?></td>
            </tr>
            <tr>
                <td class="paddingTop20">Local de embarque: <?= $fixacao->local_embarque ?></td>
            </tr>
            <tr>
                <td class="paddingTop20">Contas bancárias: <?= $fixacao->contasBancarias()->banco ." - ". $fixacao->contasBancarias()->agencia ." - ".$fixacao->contasBancarias()->conta?></td>            </tr>
            <tr>
                <td class="paddingTop20">Data pagamento: <?= $fixacao->data_pagamento; ?></td>
            </tr>
        </table>
    <?php
    }
    ?>
    </section>
</body>

</html>