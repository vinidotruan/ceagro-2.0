<?php include 'partials/cabecalho.html'?>
<body class="hold-transition skin-blue sidebar-mini">
<style>
	#clientes {
		transition: 0.5;
	}
</style>
	<div class="wrapper">
	<?php include "partials/header.html";?>
	<?php include "partials/menu.html";?>
        <div class="content-wrapper">
		<section class="content-header">
      <h1>
        Painel de Controle
        <small>Gestão de Contratos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-lg-4 col-xs-8">
          <div class="small-box bg-aqua">
            <div class="inner" id="contratos">
              <h3>1460</h3>

              <p>Contratos atuais</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="https://ceagro.com.br/sistema/contratosLista.php" class="small-box-footer">Ver contratos <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-xs-8">
          <div class="small-box bg-green">
            <div class="inner" id="contratos_fut">
              <h3>160</h3>

              <p>Contratos futuros</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="https://ceagro.com.br/sistema/contratosLista.php" class="small-box-footer">Ver contratos <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-xs-8">
          <div class="small-box bg-yellow">
            <div class="inner" id="clientes">
              <h3>44</h3>

              <p>Clientes</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="https://ceagro.com.br/sistema/clientesLista.php" class="small-box-footer">Ver lista <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <div class="row">
        <section class="col-lg-12 connectedSortable">
          <div class="box box-solid bg-green-gradient">
            <div class="box-header">
              <i class="fa fa-calendar"></i>
			  <h3 class="box-title">Calendário</h3>
              <div class="pull-right box-tools">
              </div>
            </div>
            <div class="box-body no-padding">
              <div id="calendar" style="width: 100%"></div>
            </div>
          </div>
        </section>
		
        <section class="col-lg-5 connectedSortable">
        </section>
      </div>
    </section>
        </div>
		<div class="control-sidebar-bg"></div>
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
	<script>
</script>
	<script src="public/assets/js/index.js"></script>
	<?php include 'partials/rodape.html'?>
