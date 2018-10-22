<?php include 'imports/cabecalho.html'?>
<body class="hold-transition skin-blue sidebar-mini" onload="buscar()">
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
        </tr>
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
<div class="container-fluid">
<div id="titulo">
    Produto:
</div>
<div>
      <div class="col-md-12 col-sm-12 col-xs-12" id="campo"><input type="text" name="titulo" class="form-control" placeholder="Título" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	   <div class="col-md-12 col-sm-12 col-xs-12" id="campo">
       <textarea class="form-control" rows="5" id="comment" placeholder="Descrição" name="descricao"></textarea>
	</div>
	<div class="col-md-6 col-sm-6 col-xs-12" id="campo_direita">
	  <select id="select">
	  <option value="Grama">Grama</option>
	  <option value="Quilo">Quilo</option>
	  <option value="Tonelada">Tonelada</option>
	  </select>
	</div>
	<div class="col-md-6 col-sm-6 col-xs-12" id="campo">
		<input type="text" name="quantidade" class="form-control col-xs-3" placeholder="Quantidade" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
		</div>


	   <div>
	   </div>
    </div>
    <div id="botoes"><input type="submit" class="btn btn-warning" value="Enviar"></div>
    </form>

</div>


<!-- CONTEÚDO DA PÁGINA -->

</section>
</div>
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <i class="fab fa-optin-monster"></i>
  </div>
  Copyright &copy; 2018 - 2019 - ektech.com.br - Todos Direitos Reservados. | Endereço Ip: <?php //mostraIP(); ?>
</footer>
<div class="control-sidebar-bg"></div>
</div>
<?php include 'imports/imports.html'?>
<script src="contratos.js"></script>
<?php include 'imports/rodape.html'?>