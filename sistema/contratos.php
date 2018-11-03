<?php include 'imports/cabecalho.html'?>
<body class="hold-transition skin-blue sidebar-mini" onload="verificarContrato()">
   <div class="wrapper">
   <?php include 'imports/header.html'?>
   <?php include "menu.html";?>
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="row mx-auto">
                        <div class="col-12">
                            <form id="contrato">
                                <div id="titulo">Dados Confirmação</div>
                                <div class="form-group row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="numero" class="form-control" placeholder="Confirmação Nº">
                                    </div>
                                </div>
                                <div class="form-group row" id="vendedor">
                                    <div class="form-row mx-3">
                                        <div id="titulo" class="col-12">Dados do Vendedor</div>
                                        <div class="col-md-6 col-sm-6 col-xs-6" >
                                            <input onchange="selecionarVendedor(this)" type="text" id="nome" name="nome" autocomplete="off" list="vendedores" class="form-control" placeholder="Selecione seu vendedor">
                                            <datalist id="vendedores"></datalist>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <input onchange="selecionarCnpjVendedor(this)" type="text" id="cnpj" name="cnpj" autocomplete="off" list="vendedores_cnpjs" class="form-control" placeholder="Digite seu cnpj">
                                            <datalist id="vendedores_cnpjs"></datalist>
                                        </div>
                                    </div>
                                    <div class="form-row mx-3">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <input type="text" id="razao_social" name="razao_social" class="form-control" placeholder="Razão Social">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <input type="text" id="responsavel"  name="responsavel_vendedor" class="form-control" placeholder="Responsável">
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <input type="text" id="assinatura" name="assinatura_vendedor" class="form-control" placeholder="Assinatura">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row" id="comprador">
                                    <div class="form-row mx-3">
                                        <div id="titulo" class="col-12">Dados do Comprador</div>
                                        <div class="col-md-6 col-sm-6 col-xs-6" >
                                            <input onchange="selecionarComprador(this)" type="text" id="nome" name="nome" autocomplete="off" list="compradores" class="form-control" placeholder="Selecione seu comprador">
                                            <datalist id="compradores">
                                            </datalist>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <input onchange="selecionarCnpjComprador(this)" type="text" id="cnpj" name="cnpj" autocomplete="off" list="compradores_cnpjs" class="form-control" placeholder="Digite seu cnpj">
                                            <datalist id="compradores_cnpjs">
                                            </datalist>
                                        </div>
                                    </div>
                                    <div class="form-row mx-3">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <input type="text" id="razao_social" name="razao_social" class="form-control" placeholder="Razão Social">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <input type="text" id="responsavel"  name="responsavel_comprador" class="form-control" placeholder="Responsável">
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <input type="text" id="assinatura" name="assinatura_comprador" class="form-control" placeholder="Assinatura">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="form-row mx-3" id="produto">
                                        <div id="titulo">Produto:</div>

                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <input onchange="selecionarProduto(this)" type="text" id="produto nome" name="nome" autocomplete="off" list="produtos" class="form-control" placeholder="Escolha seu produto">
                                            <datalist id="produtos">
                                            </datalist>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <input type="text" name="safra" class="form-control" placeholder="Safra">
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3" >
                                            <input type="text" name="quantidade" class="form-control" placeholder="Quantidade">
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <select name="unidade_medida" id="select">
                                                <option value="g">Grama</option>
                                                <option value="k">Quilo</option>
                                                <option value="t">Tonelada</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <textarea class="form-control" rows="5" id="comment" placeholder="Descrição" name="descricao"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" value="enviar">
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <div class="control-sidebar-bg"></div>
        </div>
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <i class="fab fa-optin-monster"></i>
            </div>
            Copyright &copy; 2018 - 2019 - ektech.com.br - Todos Direitos Reservados. | Endereço Ip:
        </footer>
    </div>
   <?php include 'imports/imports.html'?>
   <script src="contratos.js"></script>
   <?php include 'imports/rodape.html'?>