<?php //include "../resources/resources.php";?>
<?php //include "../resources/security.php";?>
<?php //safeWeb();?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php //title();?></title>
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

	<script src="../bootstrap/js/app.min.js"></script>

	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
	integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	crossorigin="anonymous"></script>
	<script src="http://code.jquery.com/jquery-2.1.4.js" integrity="sha256-siFczlgw4jULnUICcdm9gjQPZkw/YPDqhQ9+nAOScE4="
	crossorigin="anonymous"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script src="../bootstrap/js/app.min.js"></script>
</body>
</html>
