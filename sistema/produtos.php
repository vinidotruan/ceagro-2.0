<?php include 'partials/cabecalho.html'?>
<body class="hold-transition skin-blue sidebar-mini" onload="buscar()">
	<div class="wrapper">
		<?php include "partials/header.html"?>
		<?php include "partials/menu.html";?>
		<div class="content-wrapper" style="height:auto !important">
			<section class="content">
        <div id="titulo">
        Produtos:
        </div>
        <form id="produtos">
          <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12" id="campo">
            <input type="text" name="nome" class="form-control" placeholder="Nome" required autocomplete="off">
          </div>
          <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12" id="campo">
            <input class="form-control" rows="5" id="comment" placeholder="Categoria" name="categoria" required autocomplete="off">
          </div>
          <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
            <select id="select" name="tipo" style="width:100%" required>
                <option value="grao">Selecione o tipo do produto</option>
                <option value="grao">grão</option>
                <option value="oleo">óleo</option>
                <option value="farelo">farelo</option>
            </select>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12" >
            <input type="button" class="btn btn-warning" value="Enviar" onclick="enviar()" style="margin-left: 90%">
          </div>
        </form>
   		</section>
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
													<input type="text" id='filtro' name="criterio" class="form-control" onkeyup="filtrar()" autocomplete="off">
												</div>
											</div>
											<div class="box-body">
												<table class="table table-bordered" id="produtos">
													<thead>
														<tr>
															<th>Nome</th>
															<th>Tipo</th>
															<th>Categoria</th>
														</tr>
													</thead>
													<tbody id="produtos_lista">
													</tbody>
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
		<div class="control-sidebar-bg"></div>
	</div>
	<?php include 'partials/imports.html'?>
  <script src="public/assets/js/produtos.js"></script>
	<?php include 'partials/rodape.html'?>