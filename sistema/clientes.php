<?php include 'partials/cabecalho.html'?>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php include "partials/header.html"?>
		<?php include "partials/menu.html";?>
		<div class="content-wrapper" style="height:auto !important">
			<section class="content">
				<form id="formulario">
					<div>
						<div id="titulo">Dados Básicos</div>
					</div>
					<div>
						<div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xs-12">
							<input type="text" class="form-control" name="razao_social" placeholder="Razão Social" autocomplete="off">
						</div>
						<div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xs-12">
							<input type="text" class="form-control col-xs-3" name="cnpj" placeholder="Cnpj" autocomplete="off">
						</div>
						<div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xs-12">
							<input type="text" class="form-control col-xs-3" name="inscricao_estadual" placeholder="I. Estadual" autocomplete="off">
						</div>
						<div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xs-12">
							<input type="text" class="form-control" name="email" placeholder="Email" autocomplete="off">
						</div>
						<div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xs-12">
							<input type="text" class="form-control" name="nome" placeholder="Nome" autocomplete="off">
						</div>
					</div>
					<div class="form-row">
						<div class="col-6 col-md-6 col-sm-6 col-xs-6">
							<select name="banco_id" id="bancos" class="form-control">
								<option value="1">Selecione o banco do seu cliente</option>
							</select>
						</div>
						<div class="col-6 col-md-6 col-sm-6 col-xs-6">
							<select name="atuacao" class="form-control" autocomplete="off">
								<option value="0">Selecione a atuação do seu cliente</option>
								<option value="comprador">Comprador</option>
								<option value="vendedor">Vendedor</option>
								<option value="ambos">Ambos</option>
							</select>
						</div>
					</div>
					<div class="form-row">
						<div class="col-12 col-md-12 col-sm-12 col-xs-12 col-xs-push-9 col-lg-push-11 col-sm-push-10">
							<input type="button" class="btn btn-warning" onclick="enviar()" value="Enviar" style="margin-left: auto">
						</div>
					</div>
				</form>
				<div id="contatos">
					<form id="contatos">
					<div class="row" style="margin:auto !important">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="form-group row">
								<div class="form-row">
										<div>
											<div id="titulo"> Cadastro de Contatos</div>
										</div>
										<div class="form-row">
											<div class="col-11 col-md-11 col-sm-11 col-xs-11">
												<input type="text" class="form-control col-xs-3" name="telefone" placeholder="Telefone1" autocomplete="off" required>
											</div>
										</div>
										<div class="form-row">
											<div class="col-11 col-md-11 col-sm-11 col-xs-11">
												<textarea class="form-control" name="observacao" rows="5" id="comment" placeholder="Obs"></textarea>
											</div>
										</div>
										<div class="col-11 col-md-11 col-sm-11 col-xs-11">
											<div id="botoes" class="row">
												<input type="button" class="btn btn-warning" onclick="cadastrarContato()" value="Enviar">
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
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
												<input type="text" id="endereco" name="rua" class="form-control" placeholder="Endereço">
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
									</div>
									<div id="botoes" class="row">
										<input type="button" class="btn btn-warning" onclick="cadastrarEnderecoFat()" value="Enviar">
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
												<input type="text" id="endereco" name="rua" class="form-control" placeholder="Endereço">
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
									</div>
								</div>
								<div id="botoes" class="row">
									<input type="button" class="btn btn-warning" onclick="cadastrarEnderecoEnt()" value="Enviar">
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row" style="margin:auto !important">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<form id="dadosBancarios">
							<div class="form-group row">
								<div class="form-row">
									<div class="form-row">
										<div>
										<div id="titulo" class="col-12">
										Dados Bancários:
										</div>
											<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
												<input type="text" id="endereco" name="rua" class="form-control" placeholder="Banco">
											</div>
											<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
												<input type="text" id="numero"  name="numero" class="form-control" placeholder="Agência">
											</div>

											<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
												<input type="text" id="complemento" name="complemento" class="form-control" placeholder="Conta">
											</div>
											<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
												<input type="text" id="bairro" name="bairro" class="form-control" placeholder="Dígito">
											</div>
										</div>
									</div>
								</div>
								<div id="botoes" class="row">
									<input type="button" class="btn btn-warning" onclick="cadastrarDadosBancarios()" value="Enviar">
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
	<?php include 'partials/imports.html'?>
	<script src="public/assets/js/clientes.js"></script>
	<?php include 'partials/rodape.html'?>