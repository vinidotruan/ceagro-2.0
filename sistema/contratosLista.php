<?php include 'partials/cabecalho.html' ?>
<body class="hold-transition skin-blue sidebar-mini" onload="buscarContratos()">
	<div class="wrapper">
	<?php include "partials/header.html"; ?>
	<?php include "partials/menu.html"; ?>
        <div class="content-wrapper">

			<section class="content">
				<div class="row">
					<div class="col-xs-12">
						<div class="box box-info">
							<div class="box-header">
								<h3 class="box-title">Contratos</h3>
							</div>
							<div class="box-body">
								<table class="table table-bordered table-striped" id="contratos">
									<thead>
										<tr>
											<th>Número</th>
											<th>Comprador</th>
											<th>Vendedor</th>
											<th>Produto</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
									</tbody>
								</table>
							</div>
							<div class="overlay">
								<i class="fa fa-refresh fa-spin"></i>
							</div>
						</div>
					</div>
				</div>
          	</section>
        </div>
		<div class="control-sidebar-bg"></div>
	</div>
	<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<i class="fab fa-optin-monster"></i>
			</div>
			Copyright &copy; 2018 - 2019 - ektech.com.br - Todos Direitos Reservados.
		</footer>
		<div class="control-sidebar-bg"></div>
	</div>
	<?php include 'partials/imports.html' ?>
	<script src="public/assets/js/contratosLista.js"></script>
	<?php include 'partials/rodape.html' ?>
