<?php //include "../resources/security.php";?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ceagro | Web</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
	name="viewport">
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
			<!-- nav -->
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

				<!-- MODAL AREA -->

<!-- CONTEÚDO DA PÁGINA -->
<div class="container-fluid">

<form id="formulario">
    <div>
      <div>Dados Básicos</div>
    </div>
    <div>
      <div>
        <input type="text" class="form-control" name="razao_social" placeholder="Razão Social" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
      <div>
        <input type="text" class="form-control col-xs-3" name="cnpj" placeholder="Cnpj" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
      <div>
        <input type="text" class="form-control col-xs-3" name="inscricao_estadual" placeholder="I. Estadual" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
      <div>

      </div>
    </div>
    <div>
      <div>Contatos</div>
    </div>
     <div>
      <div><input type="text" class="form-control" name="email" placeholder="Email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
      <div><input type="text" class="form-control col-xs-3" name="telefone" placeholder="Telefone1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
      <div><input type="text" class="form-control col-xs-3" name="telefone2" placeholder="Telefone2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>

    </div>
    <div>
      <div><input type="text" class="form-control" name="nome" placeholder="Nome" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
    </div>
    <div>
      <td colspan="4"><textarea class="form-control" name="obs" rows="5" id="comment" placeholder="Obs"></textarea></div>
    </div>
    <div>

      <div><button type="button" class="btn btn-danger">Alterar Dados</button></div>
      <div><button type="button" class="btn btn-primary">Limpar Formulário</button></div>
      <div><input type="submit" class="btn btn-warning" value="enviar"></div>

    </div>

</form>
</div>



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
<!-- Optional JavaScript -->
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../node_modules/jquery/dist/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<script src="teste.js" type="text/javascript"></script>
</body>
</html>
