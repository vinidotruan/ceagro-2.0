<?php include 'imports/cabecalho.html'?>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
		<?php include "imports/header.html";?>
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
			Copyright &copy; 2018 - 2019 - ektech.com.br - Todos Direitos Reservados. | Endereço Ip: <?php //mostraIp();?>
		</footer>
		<div class="control-sidebar-bg"></div>
	<?php include 'imports/rodape.html'?>
