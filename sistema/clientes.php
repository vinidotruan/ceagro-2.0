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
						<form id="endereco">
							<div class="form-group row">
								<div class="form-row">
									<div class="form-row">
										<div>
											<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
												<input type="text" id="campo rua" name="rua" class="form-control" placeholder="Razão Social">
											</div>
											<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
												<input type="text" id="campo cep"  name="cep" class="form-control" placeholder="Responsável">
											</div>

											<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
												<input type="text" id="campo bairro" name="bairro" class="form-control" placeholder="Assinatura">
											</div>
											<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
												<input type="text" id="bairro" name="bairro" class="form-control" placeholder="Assinatura">
											</div>
										</div>
									</div>
									<div>
										<div class="form-row">
											<div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12">
												<input type="text" id="cep"  name="complemento" class="form-control" placeholder="Responsável">
											</div>
											<div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12">
												<input type="text" id="rua" name="cidade" class="form-control" placeholder="Razão Social">
											</div>
											<div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12">
												<input type="text" id="rua" name="estado" class="form-control" placeholder="Razão Social">
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div>
					<form id="TELEFONE">
						<div>
							<div>Endereço:</div>
						</div>
						<div>
							<div class="col-md-4 col-sm-4 col-xs-4" id="campo_direita">
								<input disabled type="text" name="numero" class="form-control" placeholder="Número" >
							</div>
							<div class="col-md-8 col-sm-8 col-xs-8" id="campo">
								<input disabled type="text" name="endereco" class="form-control" placeholder="Endereço" >
							</div>
						</div>
						<div>
							<div class="col-md-4 col-sm-4 col-xs-4" id="campo_direita">
								<input disabled type="text" name="cidade" class="form-control" placeholder="Cidade" >
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4" id="campo_direita">
								<input disabled type="text" name="cidade" class="form-control" placeholder="Bairro" >
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4" id="campo">
								<input disabled type="text" name="complemento" class="form-control" placeholder="Complemento" >
							</div>
						</div>
						<div>
							<div class="col-md-6 col-sm-6 col-xs-6" id="campo_direita">
								<input disabled type="text" name="cep" class="form-control" placeholder="Cep" >
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6" id="campo">
								<input disabled type="text" name="estado" class="form-control" placeholder="Estado" >
							</div>
						</div>
						<div id="grupo_botoes" class="row">
							<div id="botoes" class="col">
								<button disabled type="button" class="btn btn-danger">Alterar Dados</button>
							</div>
							<div id="botoes" class="col">
									<button disabled type="button" class="btn btn-primary">Limpar Formulário</button>
							</div>
							<div id="botoes" class="col">
								<input disabled type="submit" class="btn btn-warning" value="Enviar">
							</div>
						</div>
					</form>
				</div>
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
	<?php include 'imports/imports.html'?>
	<script src="clientes.js"></script>
	<?php include 'imports/rodape.html'?>