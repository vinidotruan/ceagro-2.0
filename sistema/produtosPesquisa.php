<?php
// include "../resources/security.php";
// include "../resources/dadosClientes.php";
// safeWeb();
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ceagro | Web</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../bootstrap/css/AdminLTE.min.css">
	<link rel="stylesheet" href="../bootstrap/css/skins/skin-blue.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<a href="http://ceagro.ektech.com.br" class="logo">
				<span class="logo-mini">CW</span>
				<span >Ceagro | Web</span>
			</a>
			<nav class="navbar navbar-static-top">
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				<div class="navbar-custom-menu">
					<p class="text-white"><!-- Mensagens --></p>
				</div>
			</nav>
		</header>
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
														<th hidden="">ID</th>
														<th style="width: 200px">Título</th>
														<th>Medida</th>
														<th style="width: 150px">Quantidade</th>
													</tr>
													<?php
# Pegou as informações do Post
if (isset($_POST["criterio"]) && isset($_POST["operacao"])) {
    loadClientes($_POST["criterio"]);
}
?>
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
									<!-- Content -->
								</td>
							</thead>
						</table>

						<!-- CONTEÚDO DA PÁGINA -->
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
		<?php include 'imports/rodape.html'?>