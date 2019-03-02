<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adendos</title>
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

    .data, .assinatura {
        float: right;
    }
    .assinatura {
        margin-right: 10%;
    }
    .confirmacao,
    .vendedor {
        margin-top: 3%;
    }
    .nome {
        float: left;
        background-color: red
    }
    .comprador {
        margin-top: 2%;
    }
    .produto {
        margin-top: 2%;
    }
    .tdproduto {
        width: 400px;
    }
    .paddingTop20 {
        padding-top: 10px;
    }
    .linha {
        padding-top: 30px;
    }
    .center{
        padding-left:33.33%;
    }
    .cnpjCeagro{
        padding-left:60%;
    }
    .ac{
	   width: 30%;
	   overflow: auto;
	   text-align:left;
    }
    .halfSize{
        width:400px;
        text-align:left;
		overflow: auto;
    }
</style>


<body>
    <header>
        <div class="log">
            <img src="public/img/logo.png" alt="">
        </div>
    </header>
    <section>
        <div class="confirmacao" >
            <span>Confirmação número: <strong><?=$adendos[0]->contrato()->numero_confirmacao ?></strong></span>
        </div>
        <div >
            <span>Contrato feito na data: <?= strftime('%d/%m/%Y', strtotime($adendos[0]->contrato()->data_cadastro)) ?></span>
        </div>
    </section>
    <section>
        <div class="vendedor">
            <table>
                <tr>
                    <td class="halfSize">Vendedor:
                        <?= $adendos[0]->contrato()->unidadeVendedor()->razao_social ?></td>
                        <td class="ac" > A/C:
                    <?= $adendos[0]->contrato()->assinatura_vendedor ?></td>
                </tr>
               
                <tr>
                    <td>
                        <?= ($adendos[0]->contrato()->unidadeVendedor->endereco->rua && strlen($adendos[0]->contrato()->unidadeVendedor->endereco->rua) > 0) ? "{$adendos[0]->contrato()->unidadeVendedor->endereco->rua}, " : 'Não cadastrada, ' ?>
                        <?= ($adendos[0]->contrato()->unidadeVendedor->endereco->numero && strlen($adendos[0]->contrato()->unidadeVendedor->endereco->numero) > 0) ? "{$adendos[0]->contrato()->unidadeVendedor->endereco->numero}, " : ' -,  ' ?>
                    
                        <?= ($adendos[0]->contrato()->unidadeVendedor->endereco->cidade && strlen($adendos[0]->contrato()->unidadeVendedor->endereco->cidade)) ? "{$adendos[0]->contrato()->unidadeVendedor->endereco->cidade} - " : "" ?>
                            <?= ($adendos[0]->contrato()->unidadeVendedor->endereco->estado) ? $adendos[0]->contrato()->unidadeVendedor->endereco->estado : " - " . $adendos[0]->contrato()->unidadeVendedor->endereco->estado ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        CNPJ/CPF:
                        <?= $adendos[0]->contrato()->unidadeVendedor->cnpj ?>
                    </td>
                </tr>
                <tr>
                    <td >
                    Inscrição Estadual:
                        <?= ($adendos[0]->contrato()->unidadeVendedor->inscricao_estadual && strlen($adendos[0]->contrato()->unidadeVendedor->inscricao_estadual) > 0) ? $adendos[0]->contrato()->unidadeVendedor->inscricao_estadual : "-" ?>
                    </td>
                    
                </tr>
            </table>
        </div>
    </section>
    <section>
        <div class="comprador">
            <table>
                <tr>
                    <td class="halfSize">Comprador:
                        <?= $adendos[0]->contrato()->unidadeComprador()->razao_social ?></td>
                        <td class="ac">A/C:
                        <?= $adendos[0]->contrato()->assinatura_comprador ?></td>
                </tr>
                <tr>
                    <td>
                        <?= ($adendos[0]->contrato()->unidadeComprador->endereco->rua && strlen($adendos[0]->contrato()->unidadeComprador->endereco->rua) > 0) ? "{$adendos[0]->contrato()->unidadeComprador->endereco->rua}, " : 'Não cadastrada, ' ?>
                        <?= ($adendos[0]->contrato()->unidadeComprador->endereco->numero && strlen($adendos[0]->contrato()->unidadeComprador->endereco->numero) > 0) ? "{$adendos[0]->contrato()->unidadeComprador->endereco->numero}, " : ' -,  ' ?>
                    
                        <?= ($adendos[0]->contrato()->unidadeComprador->endereco->cidade && strlen($adendos[0]->contrato()->unidadeComprador->endereco->cidade)) ? "{$adendos[0]->contrato()->unidadeComprador->endereco->cidade} - " : "" ?>
                            <?= ($adendos[0]->contrato()->unidadeComprador->endereco->estado) ? $adendos[0]->contrato()->unidadeComprador->endereco->estado : " - " . $adendos[0]->contrato()->unidadeComprador->endereco->estado ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        CNPJ/CPF:
                        <?= $adendos[0]->contrato()->unidadeComprador->cnpj ?>
                    </td>
                </tr>
                <tr>
                    <td>
                    Inscrição Estadual:
                        <?= ($adendos[0]->contrato()->unidadeComprador->inscricao_estadual && strlen($adendos[0]->contrato()->unidadeComprador->inscricao_estadual) > 0) ? $adendos[0]->contrato()->unidadeComprador->inscricao_estadual : "-" ?>
                    </td>
                
                        </tr>
            </table>
        </div>
    </section>
    <section>
        <div class="produto">
            <table>
                <tr>
                    <td  style="width: 333px">Produto:
                        <?= $adendos[0]->contrato()->produto->nome ?></td>
                    <td  >Safra:
                        <?= $adendos[0]->contrato()->safra ?? "Nenhum" ?></td>
                </tr>
                <tr>
                    <td class="paddingTop20">Quantidade:
                        <?= $adendos[0]->contrato()->quantidade ?>
                    </td>
                    <td class="paddingTop20">Unidade: <?= $adendos[0]->contrato()->unidade()->titulo ?>
                    </td>
                </tr>
                
            </table>
    </section>
    <section>
        <?php $i=1 ?>
        <?php foreach ($adendos as $adendo):?>
        <table >
            <tr>
                <td class="paddingTop20" ><strong>Adendo 0<?= $i++ ?></strong></td>
            </tr>
            <tr>
                <td class="" ><strong>Descrição</strong>: <?=$adendo->descricao; ?></td>
            </tr>
        </table>
        <?php endforeach?>
    </section>
</body>

</html>