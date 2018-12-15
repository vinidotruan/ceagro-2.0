<?php include 'partials/cabecalho.html'?>
<body class="hold-transition skin-blue sidebar-mini" onload="buscar()">
	<div class="wrapper">
	<?php include "partials/header.html";?>
	<?php include "partials/menu.html";?>
        <div class="content-wrapper">

			<section class="content">
				<div class="row">
					<div class="col-xs-12">
						<div class="box">
							<div class="box-header">
								<h3 class="box-title">Clientes</h3>
							</div>
							<div class="box-body">
								<table id="clientes" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>Razão Social</th>
											<th>Nome Fantasia</th>
											<th>CNPJ</th>
											<th>Inscrição Estadual</th>
											<th>Cidade</th>
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
			 Copyright © 2018 CEAGRO - Todos os Direitos Reservados. Feito com  <img src="http://dom.com.vc/dom.com.vc.gif" alt="DOM Creative Consulting" height="20" width="20">  por <a href="https://dom.com.vc">DOM</a>
		</footer>
		<div class="control-sidebar-bg"></div>
	</div>
	<?php include 'partials/imports.html'?>
	<script>
</script>
	<script src="public/assets/js/clientesLista.js"></script>
	<?php include 'partials/rodape.html'?>
