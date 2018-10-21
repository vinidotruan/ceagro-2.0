<?php
//include "../resources/resources.php";
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ceagro | Web</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
  name="viewport">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="../bootstrap/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../bootstrap/css/skins/skin-blue.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<?php include 'menu.html'?>
	<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<a href="http://ceagro.ektech.com.br" class="logo">
				<span class="logo-mini">CW</span>
					<span ><?php //title();?></span>
			</a>
			<nav class="navbar navbar-static-top">
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				<div class="navbar-custom-menu">
					<p class="text-white">Olá!  !!!</p>
				</div>
			</nav>
		</header>
            <?php include "menu.html";?>

		<div class="content-wrapper">
			<section class="content-header">
		<! #mensagem >
			</section>
			<section class="content">
				<form id="FrmMain" runat="server">
					<asp:Label ID="LbIdEscola" runat="server" Visible="false" Text="Label"></asp:Label>
					<table class="table">
						<thead>
							<tr>
								<td colspan="2">
									<div class="row">
										<div class="col-md-12">
											<div class="box">
												<div class="box-header with-border">
													<h3 class="box-title">Principal</h3>
												</div>
												Informações que deseja deixar na área principal.
											</div>

										</div>
									</div>


								</td>
							</tr>
						</thead>
					</table>

				</form>
			</section>
		</div>
		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<i class="fab fa-optin-monster"></i>
			</div>
			Copyright &copy; 2018 - 2019 - ektech.com.br - Todos Direitos Reservados. | Endereço Ip: <?php mostraIp();?>
		</footer>
		<div class="control-sidebar-bg"></div>
	</div>
	<?php include 'imports/rodape.html'?>
