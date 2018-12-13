<?php include 'partials/cabecalho.html'?>
<body class="hold-transition skin-blue sidebar-mini" onload="verificarCliente()">
	<div class="wrapper">
	<?php include "partials/header.html";?>
	<?php include "partials/menu.html";?>
    <div class="wrapper">
        <div class="content-wrapper">
            <br>
            <div class="row">
                <div class="col-xs-12">
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
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="razao_social">Nome Fantasia</label>
                                                <input type="text" class="form-control" name="nome_fantasia" placeholder="Digite o nome fantasia do seu cliente" autocomplete="off" required>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="form-group">
                                                <label for="razao_social">Razão Social</label>
                                                <input type="text" class="form-control" name="razao_social" placeholder="Digite a razão social" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="form-group">
                                                <label for="cnpj">CNPJ</label>
                                                <input type="text" class="form-control" name="cnpj" placeholder="Digite o cnpj do estabelecimento" autocomplete="off"  data-inputmask='"mask": "99.999.999/9999-99"' data-mask>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="form-group">
                                                <label for="inscricao_estadual">Inscrição Estadual</label>
                                                <input type="text" class="form-control" name="inscricao_estadual" placeholder="Digite a inscrição estadual do estabelecimento" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <?php require ('partials/components/erro.html') ?>
                                    <button type="button" class="btn btn-primary pull-right" onclick="cadastrar()"></button>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 endereco">
                    <section class="invoice">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2 class="page-header">
                                <i class="fa fa-map"></i> Endereço:
                                </h2>
                            </div>
                        </div>
                        <div class="row invoice-info">
                            <form role="form" id="endereco">
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
                                                <input type="text" class="form-control" name="cep" placeholder="Digite o código do produto" autocomplete="off" data-inputmask='"mask": "99999-999"' data-mask>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="box-footer">
                                    <?php require ('partials/components/erro.html') ?>
                                    <button type="button" class="btn btn-primary pull-right" onclick="cadastrarEndereco()"></button>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>

               
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contasBancarias">

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
                                    <?php require ('partials/components/erro.html') ?>
                                    <button type="button" class="btn btn-primary pull-right"></button>
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
    <footer class="main-footer">
			<div class="pull-right hidden-xs">
				<i class="fab fa-optin-monster"></i>
			</div>
			 Copyright © 2018 CEAGRO - Todos os Direitos Reservados. Feito com  <img src="http://dom.com.vc/dom.com.vc.gif" alt="DOM Creative Consulting" height="20" width="20">  por <a href="https://dom.com.vc">DOM</a>
		</footer>
	<?php include 'partials/imports.html'?>
    <script src="public/assets/js/clientes.js"></script>
    <script src="adminlte/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="adminlte/plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <script>
        $('[data-mask]').inputmask();
    </script>
	<?php include 'partials/rodape.html'?>
	</div>
