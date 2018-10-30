<?php include 'imports/cabecalho.html'?>
<div class="content-wrapper">
   <section class="content">
      <?php include "imports/header.html"?>
      <?php include "menu.html";?>
      <div class="container-fluid">
         <div id="titulo">
            Produto:
         </div>
         <div>
            <form id="produtos">
                <div class="col-md-12 col-sm-12 col-xs-12" id="campo">
                  <input type="text" name="titulo" class="form-control" placeholder="Título">
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12" id="campo">
                  <textarea class="form-control" rows="5" id="comment" placeholder="Descrição" name="descricao"></textarea>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12" id="campo_direita">
                  <select id="select" name="tipo">
                      <option value="grao">grão</option>
                      <option value="oleo">óleo</option>
                      <option value="farelo">farelo</option>
                  </select>
                </div>
            </form>
          </div>
        <div id="botoes">
          <input type="submit" class="btn btn-warning" value="Enviar">
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
<script src="contratos.js"></script>
<?php include 'imports/rodape.html'?>