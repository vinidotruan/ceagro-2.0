<?php include 'partials/cabecalho.html'?>
<body class="hold-transition skin-blue sidebar-mini" onload="buscarContratos()">
	<div class="wrapper">
		<?php include "partials/header.html";?>
		<?php include "partials/menu.html";?>
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
															<th>Numero</th>
															<th>Comprador</th>
															<th>Vendedor</th>
															<th>Produto</th>
														</tr>
													</thead>
												</table>
											</div>
										</div>
									</div>
								</div>
							</form>
						</td>
					</thead>
				</table>
			</section>
		</div>
		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<i class="fab fa-optin-monster"></i>
			</div>
			Copyright &copy; 2018 - 2019 - ektech.com.br - Todos Direitos Reservados.
		</footer>
	</div>
	<?php include 'partials/imports.html'?>
	<script src="public/assets/js/contratosLista.js"></script>
	<?php include 'partials/rodape.html'?>