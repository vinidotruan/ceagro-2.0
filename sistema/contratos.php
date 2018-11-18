<?php include 'partials/cabecalho.html'?>
<body class="hold-transition skin-blue sidebar-mini" onload="verificarContrato()">
	<div class="wrapper">
	<?php include "partials/header.html";?>
	<?php include "partials/menu.html";?>
    <div class="wrapper">
        <div class="content-wrapper" style="min-height: 1080px;">
            <br>
            <div class="row">
                <div class="col-xs-12">
                    <form role="form" id="contrato">
                        <div class="row">
                            <!-- Dados do Contrato -->
                            <div class="col-xs-12">
                                <section class="invoice" id="contrato">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h2 class="page-header">
                                            <i class="fa fa-file"></i> Dados do Contrato
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="row invoice-info">
                                        <div class="box-body">
                                            <div class="form-row">
                                                <div class="col-xs-12 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="codigo">Código do Contrato</label>
                                                        <input type="text" class="form-control" name="codigo" placeholder="Digite o código do contrato" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="comissao">Comissão</label>
                                                        <input type="text" class="form-control" name="comissao" placeholder="Informe sobre a comissao do contrato" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="data_cadastro">Data do Contrato</label>
                                                        <input type="text" class="form-control" name="data_cadastro" placeholder="Digite a data do contrato" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Dados do Vendedor -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <section class="invoice box" id="vendedor" style="width: auto">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h2 class="page-header">
                                                <i class="fa fa-address-card"></i> Dados do Vendedor
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="row invoice-info">
                                        <div class="box-body">
                                            <div class="form-row">
                                                <div class="col-xs-12">
                                                    <div class="form-group">
                                                        <label for="cnpj">Cnpj</label>
                                                        <select class="form-control select2" name="cnpj" style="width: 100%;" id="cnpjs" onchange="selecionarCliente('cnpj', 'vendedores')">
                                                            <option value="null">Selecione o Vendedor</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="form-group">
                                                        <label for="razao_social">Razão Social</label>
                                                        <select class="form-control select2" name="razao_social" style="width: 100%;" id="razoes" onchange="selecionarCliente('razao_social', 'vendedores')">
                                                            <option value="null">Selecione o Vendedor</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="form-group">
                                                        <label for="assinatura">Assinatura do Vendedor</label>
                                                        <input type="text" class="form-control" name="assinatura_vendedor" placeholder="Digite a Assinatura do Vendedor" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="overlay">
                                        <i class="fa fa-refresh fa-spin"></i>
                                    </div>
                                </section>
                            </div>

                            <!-- Dados do Comprador -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <section class="invoice box" id="comprador" style="width: auto">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h2 class="page-header">
                                                <i class="fa fa-address-card"></i> Dados do Comprador
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="row invoice-info">
                                        <div class="box-body">
                                            <div class="form-row">
                                                <div class="col-xs-12">
                                                    <div class="form-group">
                                                        <label for="cnpj">Cnpj</label>
                                                        <select class="form-control select2" name="cnpj" style="width: 100%;" id="cnpjs" onchange="selecionarCliente('cnpj', 'compradores')">
                                                            <option value="null">Selecione o Comprador</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="form-group">
                                                        <label for="razao_social">Razão Social</label>
                                                        <select class="form-control select2" name="razao_social" style="width: 100%;" id="razoes" onchange="selecionarCliente('razao_social', 'compradores')">
                                                            <option value="null">Selecione o Comprador</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="form-group">
                                                        <label for="assinatura">Assinatura do Comprador</label>
                                                        <input type="text" class="form-control" name="assinatura_comprador" placeholder="Digite a Assinatura do Comprador" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="overlay">
                                        <i class="fa fa-refresh fa-spin"></i>
                                    </div>
                                </section>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Dados do Produto -->
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-12">
                                <section class="invoice" id="produto">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h2 class="page-header">
                                                <i class="fa fa-cart-plus"></i> Dados do Produto
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="row invoice-info">
                                        <div class="box-body">
                                            <div class="form-row">
                                                <div class="col-xs-12 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="cnpj">Produto</label>
                                                        <select class="form-control select2" name="produto_id" style="width: 100%;" id="produtos" onchange="selecionarProduto()">
                                                            <option value="null">Selecione o Produto</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="unidade_medida_id">Unidades</label>
                                                        <select class="form-control select2" name="unidade_medida_id" style="width: 100%;" id="unidades">
                                                            <option value="null">Selecione a Unidade de medida</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="safra">Safra</label>
                                                        <input type="text" class="form-control" name="safra" placeholder="Informe a safra do produto." autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-lg-6">
                                                    <div class="form-group">
                                                        <label for="quantidade_descricao">Quantidade & Descrição</label>
                                                        <textarea type="text" class="form-control" name="quantidade_descricao" placeholder="Digite a quantidade" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-lg-6">
                                                    <div class="form-group">
                                                        <label for="peso_total">Peso Total</label>
                                                        <textarea type="text" class="form-control" name="peso_total" placeholder="Digite o peso total" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-xs-12 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="peso_qualidade">Peso & Qualidade</label>
                                                        <input type="text" class="form-control" name="peso_qualidade" placeholder="Informe sobre o Peso e a Qualdiade" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-lg-4">
                                                <div class="form-group">
                                                    <label for="tipo_embarque">Tipo de Embarque</label>
                                                    <input type="text" class="form-control" name="tipo_embarque" placeholder="Digite o tipo de embarque" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-lg-4">
                                                <div class="form-group">
                                                    <label for="preco_texto">Preco</label>
                                                    <input type="text" class="form-control" name="preco_texto" placeholder="Digite o preco" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="form-group">
                                                    <label for="pagamento_texto">Pagamento</label>
                                                    <textarea type="text" class="form-control" name="pagamento_texto" rows="3" placeholder="Digite as informações sobre o pagamento"></textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Dados do Produto -->
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-12">
                                <section class="invoice" id="produto">
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary pull-right" id="enviar"></button>
                                </div>
                                </section>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

            <div class="clearfix"></div>
            </div>
        <div class="control-sidebar-bg"></div>
    </div>

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content" style="background: rgba(0,0,0,0)">
                <div class="modal-body" style="background: rgba(0,0,0,0)">
                </div>
            </div>
        <!-- /.modal-content -->
        </div>
          <!-- /.modal-dialog -->
    </div>
	<?php include 'partials/imports.html'?>
    <script src="public/assets/js/contratos.js"></script>
	<?php include 'partials/rodape.html'?>
	</div>
