<?php include 'partials/cabecalho.html'?>
<body class="hold-transition skin-blue sidebar-mini" onload="verificarCliente()">
	<div class="wrapper">
	<?php include "partials/header.html";?>
	<?php include "partials/menu.html";?>
    <div class="wrapper">
        <div class="content-wrapper">
            <br>
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <section class="invoice">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2 class="page-header">
                                <i class="fa fa-address-card"></i> Dados Base
                                </h2>
                            </div>
                        </div>
                        <div class="row invoice-info">
                            <form role="form" id="cliente">
                                <div class="box-body">
                                    <div class="form-row">
                                        <div class="col-xs-12 col-lg-4">
                                            <div class="form-group">
                                                <label for="razao_social">Razão Social</label>
                                                <input type="text" class="form-control" name="razao_social" placeholder="Digite o nome do produto" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-lg-4">
                                            <div class="form-group">
                                                <label for="cnpj">CNPJ</label>
                                                <input type="text" class="form-control" name="cnpj" placeholder="Digite o código do produto" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-lg-4">
                                            <div class="form-group">
                                                <label for="inscricao_estadual">Inscrição Estadual</label>
                                                <input type="text" class="form-control" name="inscricao_estadual" placeholder="Digite o código do produto" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-lg-4">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="text" class="form-control" name="email" placeholder="Digite o código do produto" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-lg-4">
                                            <div class="form-group">
                                                <label>Atuação do Cliente</label>
                                                <select class="form-control select2" name="atuacao" style="width: 100%;">
                                                    <option value="0">Selecione a atuação do seu cliente</option>
                                                    <option value="comprador">Comprador</option>
                                                    <option value="vendedor">Vendedor</option>
                                                    <option value="ambos">Ambos</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="button" class="btn btn-primary pull-right" onclick="cadastrar()"></button>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 enderecoFaturamento">
                    <section class="invoice">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2 class="page-header">
                                <i class="fa fa-map"></i> Endereço Faturamento:
                                </h2>
                            </div>
                        </div>
                        <div class="row invoice-info">
                            <form role="form" id="enderecoFaturamento">
                                <div class="box-body">
                                    <div class="form-row">
                                        <div class="col-xs-12 col-lg-8">
                                            <div class="form-group">
                                                <label for="rua">Rua</label>
                                                <input type="text" class="form-control" name="rua" placeholder="Digite o nome do produto" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-lg-4">
                                            <div class="form-group">
                                                <label for="numero">Número</label>
                                                <input type="text" class="form-control" name="numero" placeholder="Digite o código do produto" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xs-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="cidade">Cidade</label>
                                                <input type="text" class="form-control" name="cidade" placeholder="Digite o código do produto" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="bairro">Bairro</label>
                                                <input type="text" class="form-control" name="bairro" placeholder="Digite o código do produto" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="complemento">Complemento</label>
                                                <input type="text" class="form-control" name="complemento" placeholder="Digite o código do produto" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xs-12 col-lg-4">
                                            <div class="form-group">
                                                <label for="estado">Estado</label>
                                                <input type="text" class="form-control" name="estado" placeholder="Digite o código do produto" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-lg-8">
                                            <div class="form-group">
                                                <label for="cep">CEP</label>
                                                <input type="text" class="form-control" name="cep" placeholder="Digite o código do produto" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="button" class="btn btn-primary pull-right" onclick="cadastrarEnderecoFat()"></button>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 enderecoEntrega">
                    <section class="invoice">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2 class="page-header">
                                <i class="fa fa-map-o"></i> Endereço Entrega:
                                </h2>
                            </div>
                        </div>
                        <div class="row invoice-info">
                            <form role="form" id="enderecoEntrega">
                                <div class="box-body">
                                    <div class="form-row">
                                        <div class="col-xs-12 col-lg-8">
                                            <div class="form-group">
                                                <label for="rua">Rua</label>
                                                <input type="text" class="form-control" name="rua" placeholder="Digite o nome do produto" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-lg-4">
                                            <div class="form-group">
                                                <label for="numero">Número</label>
                                                <input type="text" class="form-control" name="numero" placeholder="Digite o código do produto" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xs-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="cidade">Cidade</label>
                                                <input type="text" class="form-control" name="cidade" placeholder="Digite o código do produto" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="bairro">Bairro</label>
                                                <input type="text" class="form-control" name="bairro" placeholder="Digite o código do produto" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="complemento">Complemento</label>
                                                <input type="text" class="form-control" name="complemento" placeholder="Digite o código do produto" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xs-12 col-lg-4">
                                            <div class="form-group">
                                                <label for="estado">Estado</label>
                                                <input type="text" class="form-control" name="estado" placeholder="Digite o código do produto" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-lg-8">
                                            <div class="form-group">
                                                <label for="cep">CEP</label>
                                                <input type="text" class="form-control" name="cep" placeholder="Digite o código do produto" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="button" class="btn btn-primary pull-right" onclick="cadastrarEnderecoEnt()"></button>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12 contasBancarias">

                    <section class="invoice">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2 class="page-header">
                                <i class="fa fa-university"></i> Dados Bancários:
                                </h2>
                            </div>
                        </div>
                        <div class="row invoice-info">
                            <form role="form" id="contasBancarias">
                                <div class="box-body">
                                    <div class="form-row">
                                        <div class="col-xs-12 col-lg-4">
                                            <div class="form-group">
                                                <label for="banco">Banco</label>
                                                <input type="text" class="form-control" name="banco" placeholder="Digite o nome do produto" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-lg-4">
                                            <div class="form-group">
                                                <label for="agencia">Agência</label>
                                                <input type="text" class="form-control" name="agencia" placeholder="Digite o código do produto" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-lg-4">
                                            <div class="form-group">
                                                <label for="conta">Conta</label>
                                                <input type="text" class="form-control" name="conta" placeholder="Digite o código do produto" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="button" class="btn btn-primary pull-right" onclick="cadastrarContaBancaria()">Cadastrar</button>
                                </div>
                            </form>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Banco</th>
                                            <th>Agência</th>
                                            <th>Conta</th>
                                        </tr>
                                    </thead>
                                    <tbody id="contas_bancarias">
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </section>
                </div>
            </div>

        <div class="clearfix"></div>
        </div>
        <div class="control-sidebar-bg"></div>
    </div>
	<?php include 'partials/imports.html'?>
    <script src="public/assets/js/clientes.js"></script>
	<?php include 'partials/rodape.html'?>
	</div>
