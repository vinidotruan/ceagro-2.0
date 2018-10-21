<?php include 'imports/cabecalho.php'?>
<body class="hold-transition skin-blue sidebar-mini" onload="buscarClientes()">
	<div class="wrapper">
		<?php include "menu.html";?>
		<?php include "imports/header.html";?>
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
													<input type="text" name="criterio" class="form-control">
													<input type="hidden" name="operacao" value="busca">
													<div class="input-group-btn">
														<button type="submit" class="btn btn-danger">Buscar</button>
													</div><!-- /btn-group -->
												</div><!-- /input-group -->
											</div><!-- /.box-header -->

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
				Copyright &copy; 2018 - 2019 - ektech.com.br - Todos Direitos Reservados. | Endereço Ip: <?php mostraIP();?>
			</footer>
			<div class="control-sidebar-bg"></div>
		</div>
		<!-- Optional JavaScript -->
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>
		<script src="http://code.jquery.com/jquery-2.1.4.js" integrity="sha256-siFczlgw4jULnUICcdm9gjQPZkw/YPDqhQ9+nAOScE4="
		crossorigin="anonymous"></script>
		<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
		<script src="../bootstrap/js/app.min.js"></script>
	</body>
	</html>
