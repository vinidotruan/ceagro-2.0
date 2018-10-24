<?php include 'imports/cabecalho.html'?>
    <body class="hold-transition skin-blue sidebar-mini" onload="buscar()">
        <div class="wrapper">
            <?php include 'imports/header.html'?>
                <?php include "menu.html";?>
                    <div class="content-wrapper">
                        <section class="content">
                            <div class="container-fluid">
                                <div class="table">
                                    <form id="formulario">
                                        <div id="titulo">Dados Confirmação</div>
                                        <div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input type="text" name="numero_confirmacao" class="form-control" placeholder="Confirmação Nº" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                            </div>
                                        </div>
                                    </form>
                                    <div id="titulo">Dados do Vendedor</div>
                                      <form id="formulario">
                                          <div>
                                              <div class="col-md-12 col-sm-12 col-xs-12" id="campo">
                                                <input oninput="selecionarVendedor(this)" type="text" name="vendedor_nome" autocomplete="off" list="vendedores" class="form-control" placeholder="Selecione seu vendedor" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                                <datalist id="vendedores">
                                                </datalist>
                                              </div>
                                          </div>

                                          <div class="col-md-6 col-sm-6 col-xs-12" id="campo_direita">
                                          <input type="text" id="vendedor_cnpj" name="vendedor_cnpj" class="form-control" class="form-control" placeholder="CNPJ" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12" id="campo_direita">
                                              <input type="text" id="vendedor_razao_social" name="vendedor_razao_social" class="form-control" placeholder="Razão Social" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                          </div>

                                          <div class="linha2">
                                              <div class="col-md-4 col-sm-4 col-xs-12" id="campo_direita">
                                                  <input type="text" id="vendedor_estado" name="vendedor_estado" class="form-control" placeholder="Estado" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                              </div>
                                              <div class="col-md-4 col-sm-4 col-xs-12" id="campo_direita">
                                                  <input type="text" id="vendedor_cidade" name="vendedor_cidade" class="form-control" placeholder="Cidade" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                              </div>
                                              <div class="col-md-4 col-sm-4 col-xs-12" id="campo">
                                                  <input type="text" id="vendedor_responsavel" name="vendedor_responsavel" class="form-control" placeholder="Responsável" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                              </div>
                                          </div>
                                          <div>
                                              <div class="col-md-6 col-sm-6 col-xs-12" id="campo_direita">
                                                  <input type="text" id="vendedor_telefone" name="vendedor_telefone" class="form-control" placeholder="Telefone" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                              </div>
                                              <div class="col-md-6 col-sm-6 col-xs-12" id="campo">
                                                  <input type="text" id="vendedor_email" name="vendedor_email" class="form-control" placeholder="E-mail" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                              </div>
                                              <div class="col-md-6 col-sm-6 col-xs-12" id="campo_direita">
                                                  <input type="text" id="vendedor_assinatura" name="vendedor_assinatura" class="form-control" placeholder="Assinatura" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                              </div>
                                              <div>
                                                  <select id="vendedor_banco" name="vendedor_banco" class="col-md-6 col-sm-6 col-xs-12" id="select">
                                                      <option>Selecione o Banco do Vendedor</option>
                                                      <option value="Bradesco">Bradesco</option>
                                                      <option value="Itaú">Itaú</option>
                                                      <option value="Banco do Brasil">Banco do Brasil</option>
                                                      <option value="Banrisul">Banrisul</option>
                                                      <option value="Santander">Santander</option>
                                                      <option value="Caixa">Caixa</option>
                                                  </select>
                                              </div>
                                              <div>

                                              </div>
                                          </div>

                                      </form>
                                  
                                      <div id="titulo">Dados do Comprador</div>
                                      <form id="formulario">
                                          <div>
                                              <div class="col-md-12 col-sm-12 col-xs-12" id="campo">
                                                <input oninput="selecionarComprador(this)" type="text" name="comprador_nome" autocomplete="off" list="compradores" class="form-control" placeholder="Selecione seu comprador" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                                <datalist id="compradores">
                                                </datalist>
                                              </div>
                                          </div>

                                          <div class="col-md-6 col-sm-6 col-xs-12" id="campo_direita">
                                          <input type="text" id="comprador_cnpj" name="comprador_cnpj" class="form-control" class="form-control" placeholder="CNPJ" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12" id="campo_direita">
                                              <input type="text" id="comprador_razao_social" name="comprador_razao_social" class="form-control" placeholder="Razão Social" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                          </div>

                                          <div class="linha2">
                                              <div class="col-md-4 col-sm-4 col-xs-12" id="campo_direita">
                                                  <input type="text" id="comprador_estado" name="comprador_estado" class="form-control" placeholder="Estado" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                              </div>
                                              <div class="col-md-4 col-sm-4 col-xs-12" id="campo_direita">
                                                  <input type="text" id="comprador_cidade" name="comprador_cidade" class="form-control" placeholder="Cidade" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                              </div>
                                              <div class="col-md-4 col-sm-4 col-xs-12" id="campo">
                                                  <input type="text" id="comprador_responsavel" name="comprador_responsavel" class="form-control" placeholder="Responsável" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                              </div>
                                          </div>
                                          <div>
                                              <div class="col-md-6 col-sm-6 col-xs-12" id="campo_direita">
                                                  <input type="text" id="comprador_telefone" name="comprador_telefone" class="form-control" placeholder="Telefone" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                              </div>
                                              <div class="col-md-6 col-sm-6 col-xs-12" id="campo">
                                                  <input type="text" id="comprador_email" name="comprador_email" class="form-control" placeholder="E-mail" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                              </div>
                                              <div class="col-md-6 col-sm-6 col-xs-12" id="campo_direita">
                                                  <input type="text" id="comprador_assinatura" name="comprador_assinatura" class="form-control" placeholder="Assinatura" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                              </div>
                                              <div>
                                                  <select id="comprador_banco" name="comprador_banco" class="col-md-6 col-sm-6 col-xs-12" id="select">
                                                      <option>Selecione o Banco do Compradror</option>
                                                      <option value="Bradesco">Bradesco</option>
                                                      <option value="Itaú">Itaú</option>
                                                      <option value="Banco do Brasil">Banco do Brasil</option>
                                                      <option value="Banrisul">Banrisul</option>
                                                      <option value="Santander">Santander</option>
                                                      <option value="Caixa">Caixa</option>
                                                  </select>
                                              </div>
                                              <div>

                                              </div>
                                          </div>

                                      </form>
                                  
                                    <form id="formulario">
                                        <div id="titulo">Dados do Contrato</div>
                                </div>
                                <div>
                                    <div id="titulo">Produto:</div>
                                </div>
                                <div>
                                    <div class="col-md-12 col-sm-12 col-xs-12" id="campo">
                                        <input type="text" name="titulo" class="form-control" placeholder="Título" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12" id="campo">
                                        <textarea class="form-control" rows="5" id="comment" placeholder="Descrição" name="descricao">

                                        </textarea>
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

                                </form>
                                <form id="formulario">
                                    <div id="titulo">
                                        Contrato
                                    </div>
                                    <div>
                                        <div class="col-md-12 col-sm-12 col-xs-12" id="campo">
                                            <textarea class="form-control" name="peso_quantidade" rows="5" id="comment" placeholder="Peso e qualidade">

                                            </textarea>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12" id="campo">
                                            <textarea class="form-control" name="comissao" rows="5" id="comment" placeholder="Comissão...">

                                            </textarea>
                                        </div>
                                        <div id="titulo">
                                            Adendo
                                        </div>
                                        <div>
                                            <div class="col-md-12 col-sm-12 col-xs-12" id="campo">
                                                <textarea class="form-control" name="clausula1" rows="5" id="comment" placeholder="Clausula1">

                                                </textarea>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12" id="campo">
                                                <textarea class="form-control" name="clausula2" rows="5" id="comment" placeholder="Clausula2">

                                                </textarea>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12" id="campo">
                                                <textarea class="form-control" name="clausula3" rows="5" id="comment" placeholder="Clausula3">

                                                </textarea>
                                            </div>

                                </form>
                                <form id="formulario">
                                    <div id="titulo">
                                        Endereço de Faturamento
                                    </div>
                                    <div>
                                        <div class="col-md-4 col-sm-4 col-xs-4" id="campo_direita">
                                            <input type="text" name="numero" class="form-control" placeholder="Número" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-8" id="campo">
                                            <input type="text" name="endereco" class="form-control" placeholder="Endereço" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>

                                    </div>
                                    <div>
                                        <div class="col-md-4 col-sm-4 col-xs-4" id="campo_direita">
                                            <input type="text" name="cidade" class="form-control" placeholder="Cidade" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4" id="campo_direita">
                                            <input type="text" name="bairro" class="form-control" placeholder="Bairro" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4" id="campo">
                                            <input type="text" name="complemento" class="form-control" placeholder="Complemento" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>

                                    </div>
                                    <div>
                                        <div class="col-md-6 col-sm-6 col-xs-6" id="campo_direita">
                                            <input type="text" name="cep" class="form-control" placeholder="Cep" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6" id="campo">
                                            <input type="text" name="estado" class="form-control" placeholder="Estado" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>

                                    </div>

                                </form>
                                <form id="formulario">
                                    <div id="titulo">
                                        Endereço de Entrega
                                    </div>
                                    <div>
                                        <div class="col-md-4 col-sm-4 col-xs-4" id="campo_direita">
                                            <input type="text" name="numero" class="form-control" placeholder="Número" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-8" id="campo">
                                            <input type="text" name="endereco" class="form-control" placeholder="Endereço" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>

                                    </div>
                                    <div>
                                        <div class="col-md-4 col-sm-4 col-xs-4" id="campo_direita">
                                            <input type="text" name="cidade" class="form-control" placeholder="Cidade" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4" id="campo_direita">
                                            <input type="text" name="cidade" class="form-control" placeholder="Bairro" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4" id="campo">
                                            <input type="text" name="complemento" class="form-control" placeholder="Complemento" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>

                                    </div>
                                    <div>
                                        <div class="col-md-6 col-sm-6 col-xs-6" id="campo_direita">
                                            <input type="text" name="cep" class="form-control" placeholder="Cep" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6" id="campo">
                                            <input type="text" name="estado" class="form-control" placeholder="Estado" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>

                                    </div>
                                    <div id="grupo_botoes">
                                        <div id="botoes">
                                            <button type="button" class="btn btn-danger">Alterar Dados</button>
                                        </div>
                                        <div id="botoes">
                                            <button type="button" class="btn btn-primary">Limpar Formulário</button>
                                        </div>
                                        <div id="botoes">
                                            <input type="submit" class="btn btn-warning" value="Enviar">
                                        </div>
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
                                <i class="fab fa-optin-monster">

    </i>
                            </div>
                            Copyright &copy; 2018 - 2019 - ektech.com.br - Todos Direitos Reservados. | Endereço Ip:
                            <?php //mostraIP(); ?>
                        </footer>
                        <div class="control-sidebar-bg">

                        </div>
                        </div>
                        <?php include 'imports/imports.html'?>
                            <script src="contratos.js">
                            </script>
                            <?php include 'imports/rodape.html'?>
