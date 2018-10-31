<?php include 'imports/cabecalho.html'?>
<body class="hold-transition skin-blue sidebar-mini" onload="buscar()">
	<div class="wrapper">
		<?php include "imports/header.html";?>
		<?php include "menu.html";?>
		<div class="content-wrapper">
			<section class="content">
				<table class="table">
					<thead>
						<td colspan="2">
							<form method="post">
								<div class="row">
									<div class="col-md-12">
										<div class="box">
											<div class="box-header with-border">
												<div class="input-group col-xs-6">
													<input type="text" id='filtro' name="criterio" class="form-control" onkeyup="filtrar()">
												</div>
											</div>
											<div class="box-body">
												<table class="table table-bordered" id="produtos">
													<thead>
														<tr>
															<th style="width: 20px">Titulo</th>
														</tr>
													</thead>
													</table>
											</div>
										</div>
									</div>
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
				Copyright &copy; 2018 - 2019 - ektech.com.br - Todos Direitos Reservados.
			</footer>
			<div class="control-sidebar-bg"></div>
		</div>
		<?php include 'imports/imports.html'?>
		<script src="produtos.js"></script>
		<?php include 'imports/rodape.html'?>