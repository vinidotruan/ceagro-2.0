<?php include "imports/cabecalho.html"?>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
	<?php include "imports/header.html"?>
	<?php include "menu.html";?>
		<div class="content-wrapper">
			<section class="content">
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								...
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>
				<table class="table">
					<thead>
						<td colspan="2">
							<form method="post">
								<div class="row">
									<div class="col-md-12">
										<div class="box">
											<div class="box-header with-border">
												<div class="input-group col-xs-6">
													<input type="text" name="criterio" class="form-control">
													<input type="hidden" name="operacao" value="busca">
													<div class="input-group-btn">
														<button type="submit" class="btn btn-danger">Buscar</button>
													</div>
												</div>
											</div>
											<div class="box-body">
												<table class="table table-bordered">
													<tr>
														<th style="width: 20px"></th>
														<th hidden="">Id Cliente</th>
														<th style="width: 200px">Razão Social</th>
														<th>Cnpj</th>
														<th style="width: 150px">Insc Estadual</th>
													</tr>
												</table>
											</div><!-- /.box-body -->
											<div class="box-footer clearfix">
												<ul class="pagination pagination-sm no-margin pull-right">
													<li><a href="#">&laquo;</a></li>
													<li><a href="#">1</a></li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><a href="#">&raquo;</a></li>
												</ul>
											</div>
										</div><!-- /.box -->
									</div><!-- /.col -->
								</td>
							</thead>
						</table>
					</form>
				</section>
			</div>
			<footer class="main-footer">
				<div class="pull-right hidden-xs">
					<i class="fab fa-optin-monster"></i>
				</div>
				Copyright &copy; 2018 - 2019 - ektech.com.br - Todos Direitos Reservados. | Endereço Ip: <?php //mostraIP();?>
			</footer>
			<div class="control-sidebar-bg"></div>
		</div>
		<?php include 'imports/imports.html'?>
		<?php include 'imports/rodape.html'?>