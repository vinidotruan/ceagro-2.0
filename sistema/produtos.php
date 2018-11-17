<?php include 'partials/cabecalho.html'?>
<body class="hold-transition skin-blue sidebar-mini" onload="buscar()">
	<div class="wrapper">
	<?php include "partials/header.html";?>
	<?php include "partials/menu.html";?>
    <div class="wrapper">
        <div class="content-wrapper">
            <br>
            <section class="invoice">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="page-header">
                        <i class="fa fa-coffee"></i> Produtos
                        <!-- <small class="pull-right">Date: 2/10/2014</small> -->
                        </h2>
                    </div>
                </div>

                <div class="row invoice-info">
                    <form role="form" id="produto">
                        <div class="box-body">
                            <div class="form-row">
                                <div class="col-xs-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="nome">Nome</label>
                                        <input type="text" class="form-control" name="nome" placeholder="Digite o nome do produto" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="nome">Código</label>
                                        <input type="text" class="form-control" name="codigo" placeholder="Digite o código do produto" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-lg-4">
                                    <div class="form-group">
                                        <label>Categoria</label>
                                        <select class="form-control select2" name="tipo_id" id="tipos" style="width: 100%;">
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="button" class="btn btn-primary pull-right" onclick="enviar()">Cadastrar</button>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <div class="col-xs-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nome</th>
                                    <th>Tipo</th>
                                </tr>
                            </thead>
                            <tbody id="produtos_lista">
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>
        <div class="clearfix"></div>
        </div>
        <div class="control-sidebar-bg"></div>
    </div>
	<?php include 'partials/imports.html'?>
    <script src="public/assets/js/clientesLista.js"></script>
	<?php include 'partials/rodape.html'?>
	</div>
