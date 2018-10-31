<?php include 'imports/cabecalho.html'?>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php include "imports/header.html"?>
		<?php include "menu.html";?>
		<div class="content-wrapper">
			<section class="content">
				<form id="formulario">
					<div>
						<div id="titulo">Dados Básicos</div>
					</div>
					<div>
						<div>
							<input type="text" class="form-control" name="razao_social" placeholder="Razão Social" >
						</div>
						<div>
							<input type="text" class="form-control col-xs-3" name="cnpj" placeholder="Cnpj" >
						</div>
						<div>
							<input type="text" class="form-control col-xs-3" name="inscricao_estadual" placeholder="I. Estadual" >
						</div>
						<div>
							<input type="text" class="form-control" name="email" placeholder="Email" >
						</div>
						<div>
							<input type="text" class="form-control" name="nome" placeholder="Nome" >
						</div>
						<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<select name="atuacao">
								<option value="comprador">Comprador</option>
								<option value="vendedor">Vendedor</option>
								<option value="ambos">Ambos</option>
						</div>
					</div>
					<div class="row">
						<div id="botoes" class="row mx-2">
							<input type="button" class="btn btn-warning" onclick="enviar()" value="Enviar">
						</div>
					</div>
				</form>
				<div class="row" style="margin:auto !important">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<div class="form-row">
								<form id="contatos">
									<div>
										<div id="titulo"> Cadastro de Contatos</div>
									</div>
									<div class="form-row">
										<div class="col-11 col-md-11 col-sm-11 col-xs-11">
											<input type="text" class="form-control col-xs-3" name="telefone" placeholder="Telefone1" required>
										</div>
									</div>
									<div class="form-row">
										<div class="col-11 col-md-11 col-sm-11 col-xs-11">
											<textarea class="form-control" name="observacao" rows="5" id="comment" placeholder="Obs"></textarea>
										</div>
									</div>
									<div class="col-11 col-md-11 col-sm-11 col-xs-11">
										<div id="botoes" class="row">
											<input type="button" class="btn btn-warning" onclick="enviar()" value="Enviar">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				<div class="row" style="margin:auto !important">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-top: 2%">
						<div class="form-group row">
							<div class="form-row col-lg-12 col-md-12 col-sm-11 col-xs-11">
								<div class="box box-default form-row" id="contatosLista">
									<div class="box-header with-border">
										<h3 class="box-title">Lista de contatos</h3>
										<div class="box-tools pull-right">
											<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row" style="margin:auto !important">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<form id="faturamento">
							<div class="form-group row">
								<div class="form-row">
									<div class="form-row">
										<div>
										<div id="titulo" class="col-12">
										Endereço de Faturamento:
										</div>
											<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
												<input type="text" id="endereco" name="endereco" class="form-control" placeholder="Endereço">
											</div>
											<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
												<input type="text" id="numero"  name="numero" class="form-control" placeholder="Número">
											</div>

											<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
												<input type="text" id="complemento" name="complemento" class="form-control" placeholder="Complemento">
											</div>
											<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
												<input type="text" id="bairro" name="bairro" class="form-control" placeholder="Bairro">
											</div>
										</div>
									</div>
									<div>
										<div class="form-row">
											<div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12">
												<input type="text" id="cidade"  name="cidade" class="form-control" placeholder="Cidade">
											</div>
											<div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12">
												<input type="text" id="estado" name="estado" class="form-control" placeholder="Estado">
											</div>
											<div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12">
												<input type="text" id="cep" name="cep" class="form-control" placeholder="CEP">
											</div>
										</div>
										<div class="col-11 col-md-11 col-sm-11 col-xs-11">
									</div>
								</div>
								<div id="botoes" class="row">
											<input type="button" class="btn btn-warning" onclick="enviar()" value="Enviar">
										</div>
									</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row" style="margin:auto !important">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<form id="entrega">
							<div class="form-group row">
								<div class="form-row">
									<div class="form-row">
										<div>
										<div id="titulo" class="col-12">
										Endereço de Entrega:
										</div>
											<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
												<input type="text" id="endereco" name="endereco" class="form-control" placeholder="Endereço">
											</div>
											<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
												<input type="text" id="numero"  name="numero" class="form-control" placeholder="Número">
											</div>

											<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
												<input type="text" id="complemento" name="complemento" class="form-control" placeholder="Complemento">
											</div>
											<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
												<input type="text" id="bairro" name="bairro" class="form-control" placeholder="Bairro">
											</div>
										</div>
									</div>
									<div>
										<div class="form-row">
											<div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12">
												<input type="text" id="cidade"  name="cidade" class="form-control" placeholder="Cidade">
											</div>
											<div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12">
												<input type="text" id="estado" name="estado" class="form-control" placeholder="Estado">
											</div>
											<div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12">
												<input type="text" id="cep" name="cep" class="form-control" placeholder="CEP">
											</div>
											<div class="col-11 col-md-11 col-sm-11 col-xs-11">
										</div>
									</div>
								</div>
								<div id="botoes" class="row">
											<input type="button" class="btn btn-warning" onclick="enviar()" value="Enviar">
										</div>
									</div>
							</div>
						</form>
					</div>
				</div>
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
	<script src="clientes.js"></script>
	<?php include 'imports/rodape.html'?>