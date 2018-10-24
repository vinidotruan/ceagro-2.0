<?php include 'imports/cabecalho.html'?>
    <body class="hold-transition skin-blue sidebar-mini" onload="buscar()">
        <div class="wrapper">
        <?php include 'imports/header.html'?>
        <?php include "menu.html";?>
            <div class="content-wrapper">
                <section class="content">
                    <div class="container-fluid">
                        <div class="row mx-auto">
                            <div class="col-12">
                                <form id="formulario">
                                    <div id="titulo">Dados Confirmação</div>
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" name="numero_confirmacao" class="form-control" placeholder="Confirmação Nº" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="row mx-auto">
                            <div class="col-12 mx-auto">
                                <form id="formulario" class="">
                                    <div class="form-row mx-3">
                                        <div id="titulo" class="col-12">Dados do Vendedor</div>
                                        <div class="col-md-6 col-sm-6 col-xs-6" >
                                                <input oninput="selecionarVendedor(this)" type="text" name="vendedor_nome" autocomplete="off" list="vendedores" class="form-control" placeholder="Selecione seu vendedor" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                                <datalist id="vendedores">
                                                </datalist>
                                            </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <input oninput="selecionarCnpj(this)" type="text" name="vendedor_cnpj" autocomplete="off" list="vendedores_cnpjs" class="form-control" placeholder="Digite seu cnpj" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                            <datalist id="vendedores_cnpjs">
                                            </datalist>
                                        </div>
                                    </div>
                                    <div class="form-row mx-3">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <input type="text" id="vendedor_razao_social" name="vendedor_razao_social" class="form-control" placeholder="Razão Social" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <input type="text" id="vendedor_responsavel" name="vendedor_responsavel" class="form-control" placeholder="Responsável" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <input type="text" id="vendedor_telefone" name="vendedor_telefone" class="form-control" placeholder="Telefone" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <input type="text" id="vendedor_email" name="vendedor_email" class="form-control" placeholder="E-mail" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <input type="text" id="vendedor_assinatura" name="vendedor_assinatura" class="form-control" placeholder="Assinatura" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row mx-auto">
                            <div class="col-12 mx-auto">
                                <form id="formulario">
                                    <div class="form-row mx-3">
                                        <div id="titulo">Produto:</div>

                                        <div class="col-md-4 col-sm-4 col-xs-4">
                                            <input type="text" name="titulo" class="form-control" placeholder="Nome" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <input type="text" name="titulo" class="form-control" placeholder="Safra" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3" >
                                            <input type="text" name="quantidade" class="form-control col-xs-3" placeholder="Quantidade" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <select id="select">
                                                <option value="Grama">Grama</option>
                                                <option value="Quilo">Quilo</option>
                                                <option value="Tonelada">Tonelada</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <textarea class="form-control" rows="5" id="comment" placeholder="Descrição" name="descricao"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <form id="formulario">
                            <div id="titulo">
                                Contrato
                            </div>
                            <div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <textarea class="form-control" name="peso_quantidade" rows="5" id="comment" placeholder="Peso e qualidade">

                                    </textarea>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <textarea class="form-control" name="comissao" rows="5" id="comment" placeholder="Comissão...">

                                    </textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
                <footer class="main-footer">
                    <div class="pull-right hidden-xs">
                        <i class="fab fa-optin-monster">

                        </i>
                    </div>
            Copyright &copy; 2018 - 2019 - ektech.com.br - Todos Direitos Reservados. | Endereço Ip:
                </footer>
                <div class="control-sidebar-bg"></div>
            </div>
<?php include 'imports/imports.html'?>
<script src="contratos.js">
</script>
<?php include 'imports/rodape.html'?>
