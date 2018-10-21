<?php include 'imports/cabecalho.html'?>
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
<div class="table">
  <form id="formulario">
    <div id="titulo">Dados Confirmação</div>
    <div>
      <div class="col-md-12 col-sm-12 col-xs-12">
        <input type="text" name="numero_confirmacao" class="form-control" placeholder="Confirmação Nº" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div></br>
    </div>
    <div id="botoes"><input type="submit" class="btn btn-warning" value="Enviar"></div>
    </form>


      <div id="titulo">Dados do Vendedor</div>
    <form id="formulario">
    <div>
      <div class="col-md-12 col-sm-12 col-xs-12" id="campo"><input type="text" name="cnpj" class="form-control" class="form-control" placeholder="CNPJ" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	  </div>

      <div class="col-md-6 col-sm-6 col-xs-12" id="campo_direita">
	  <input type="text" name="nome" class="form-control" placeholder="Nome" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
	  </div>
	  <div class="col-md-6 col-sm-6 col-xs-12" id="campo_direita">
	  <input type="text" name="razao_social" class="form-control" placeholder="Razão Social" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
	  </div>

	  <div class="linha2">
	  <div class="col-md-4 col-sm-4 col-xs-12" id="campo_direita"><input type="text" name="estado" class="form-control" placeholder="Estado" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
      <div class="col-md-4 col-sm-4 col-xs-12" id="campo_direita"><input type="text" name="cidade" class="form-control" placeholder="Cidade" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
      <div class="col-md-4 col-sm-4 col-xs-12" id="campo"><input type="text" name="responsavel" class="form-control" placeholder="Responsável" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	  </div>
	  <div>
	  <div class="col-md-6 col-sm-6 col-xs-12" id="campo_direita"><input type="text" name="telefone" class="form-control" placeholder="Telefone" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	  <div class="col-md-6 col-sm-6 col-xs-12" id="campo"><input type="text" name="email" class="form-control" placeholder="E-mail" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	  <div class="col-md-6 col-sm-6 col-xs-12" id="campo_direita"><input type="text" name="assinatura" class="form-control" placeholder="Assinatura" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	  <div><select class="col-md-6 col-sm-6 col-xs-12" id="select">
			<option>Selecione o Banco do Vendedor</option>
			<option value="Bradesco">Bradesco</option>
			<option value="Itaú">Itaú</option>
			<option value="Banco do Brasil">Banco do Brasil</option>
			<option value="Banrisul">Banrisul</option>
			<option value="Santander">Santander</option>
			<option value="Caixa">Caixa</option>
		  </select></div>
      <div></div>
    </div>
    <div id="botoes"><input type="submit" class="btn btn-warning" value="Enviar"></div>
    </form>
    <form id="formulario">
	<div id="titulo">Dados do Comprador</div>

    <div>
      <div class="col-md-12 col-sm-12 col-xs-12" id="campo"><input type="text" name="cnpj" class="form-control" class="form-control" placeholder="CNPJ" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	  </div>

      <div class="col-md-6 col-sm-6 col-xs-12" id="campo_direita">
	  <input type="text" class="form-control" name="nome" placeholder="Nome" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
	  </div>
	  <div class="col-md-6 col-sm-6 col-xs-12" id="campo_direita">
	  <input type="text" class="form-control" name="razao_sopcial" placeholder="Razão Social" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
	  </div>

	  <div class="linha2">
	  <div class="col-md-4 col-sm-4 col-xs-12" id="campo_direita"><input type="text" name="estado" class="form-control" placeholder="Estado" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
      <div class="col-md-4 col-sm-4 col-xs-12" id="campo_direita"><input type="text" name="cidade" class="form-control" placeholder="Cidade" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
      <div class="col-md-4 col-sm-4 col-xs-12" id="campo"><input type="text" name="responsavel" class="form-control" placeholder="Responsável" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	  </div>
	  <div>
	  <div class="col-md-6 col-sm-6 col-xs-12" id="campo_direita"><input type="text" name="telefone" class="form-control" placeholder="Telefone" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	  <div class="col-md-6 col-sm-6 col-xs-12" id="campo"><input type="text" name="email" class="form-control" placeholder="E-mail" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	  <div class="col-md-6 col-sm-6 col-xs-12" id="campo_direita"><input type="text" name="assinatura" class="form-control" placeholder="Assinatura" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	  <div><select class="col-md-6 col-sm-6 col-xs-12" id="select">
			<option>Selecione o Banco do Comprador</option>
      <option value="Bradesco">Bradesco</option>
			<option value="Itaú">Itaú</option>
			<option value="Banco do Brasil">Banco do Brasil</option>
			<option value="Banrisul">Banrisul</option>
			<option value="Santander">Santander</option>
			<option value="Caixa">Caixa</option>
		  </select></div>
      <div></div>
    </div>
    <div id="botoes"><input type="submit" class="btn btn-warning" value="Enviar"></div>
    </form>
    <form id="formulario">
      <div id="titulo">Dados do Contrato</div>
    </div>
	<div>
      <div id="titulo">Produto:</div>
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
    <form id="formulario">
	<div id="titulo">
      Contrato
    </div>
    <div>
	<div class="col-md-12 col-sm-12 col-xs-12" id="campo">
    <textarea class="form-control" name="peso_quantidade" rows="5" id="comment" placeholder="Peso e qualidade"></textarea>
	</div>
    <div class="col-md-12 col-sm-12 col-xs-12" id="campo">
    <textarea class="form-control" name="comissao" rows="5" id="comment" placeholder="Comissão..."></textarea>
	</div>
    <div id="titulo">
      Adendo
    </div>
    <div>
      <div class="col-md-12 col-sm-12 col-xs-12" id="campo">
    <textarea class="form-control" name="clausula1" rows="5" id="comment" placeholder="Clausula1"></textarea>
	</div>
	  <div class="col-md-12 col-sm-12 col-xs-12" id="campo">
    <textarea class="form-control" name="clausula2" rows="5" id="comment" placeholder="Clausula2"></textarea>
	</div>
	  <div class="col-md-12 col-sm-12 col-xs-12" id="campo">
    <textarea class="form-control" name="clausula3" rows="5" id="comment" placeholder="Clausula3"></textarea>
	</div>
  <div id="botoes"><input type="submit" class="btn btn-warning" value="Enviar"></div>
    </form>
    <form id="formulario">
    <div id="titulo">
      Endereço de Faturamento
    </div>
    <div>
      <div class="col-md-4 col-sm-4 col-xs-4" id="campo_direita"><input type="text" name="numero" class="form-control" placeholder="Número" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
      <div class="col-md-8 col-sm-8 col-xs-8" id="campo"><input type="text" name="endereco" class="form-control" placeholder="Endereço" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>


    </div>
    <div>
		<div class="col-md-4 col-sm-4 col-xs-4" id="campo_direita"><input type="text" name="cidade" class="form-control" placeholder="Cidade" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
		<div class="col-md-4 col-sm-4 col-xs-4" id="campo_direita"><input type="text" name="bairro" class="form-control" placeholder="Bairro" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
        <div class="col-md-4 col-sm-4 col-xs-4" id="campo"><input type="text" name="complemento" class="form-control" placeholder="Complemento" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>

    </div>
	<div>
	  <div class="col-md-6 col-sm-6 col-xs-6" id="campo_direita"><input type="text" name="cep" class="form-control" placeholder="Cep" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	  <div class="col-md-6 col-sm-6 col-xs-6" id="campo"><input type="text" name="estado" class="form-control" placeholder="Estado" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>

	</div>
  <div id="botoes"><input type="submit" class="btn btn-warning" value="Enviar"></div>
    </form>
    <form id="formulario">
    <div id="titulo">
      Endereço de Entrega
    </div>
    <div>
      <div class="col-md-4 col-sm-4 col-xs-4" id="campo_direita"><input type="text" name="numero" class="form-control" placeholder="Número" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
      <div class="col-md-8 col-sm-8 col-xs-8" id="campo"><input type="text" name="endereco" class="form-control" placeholder="Endereço" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>


    </div>
    <div>
		<div class="col-md-4 col-sm-4 col-xs-4" id="campo_direita"><input type="text" name="cidade" class="form-control" placeholder="Cidade" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
		<div class="col-md-4 col-sm-4 col-xs-4" id="campo_direita"><input type="text" name="cidade" class="form-control" placeholder="Bairro" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
        <div class="col-md-4 col-sm-4 col-xs-4" id="campo"><input type="text" name="complemento" class="form-control" placeholder="Complemento" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>

    </div>
	<div>
	  <div class="col-md-6 col-sm-6 col-xs-6" id="campo_direita"><input type="text" name="cep" class="form-control" placeholder="Cep" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
	  <div class="col-md-6 col-sm-6 col-xs-6" id="campo"><input type="text" name="estado" class="form-control" placeholder="Estado" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>

	</div>
    <div id="grupo_botoes">
      <div id="botoes"><button type="button" class="btn btn-danger">Alterar Dados</button></div>
      <div id="botoes"><button type="button" class="btn btn-primary">Limpar Formulário</button></div>
      <div id="botoes"><input type="submit" class="btn btn-warning" value="Enviar"></div>
    </div>
</form>
  </tbody>
</table>

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
