<?php
// //busca de clientes
$router->get("sistema/back-end/clientes", "ClientesController@index");
$router->get("sistema/back-end/vendedores", "ClientesController@buscarVendedores");
$router->get("sistema/back-end/compradores", "ClientesController@buscarCompradores");
$router->post("sistema/back-end/clientes", "ClientesController@cadastrar");
$router->get("sistema/back-end/clientes/{cliente}", "ClientesController@show");
$router->put("sistema/back-end/clientes/{cliente}", "ClientesController@update");

$router->get("sistema/back-end/clientes/bancos", "ClientesController@buscarBancos");
$router->get("sistema/back-end/clientes/contatos", "ContatosController@index");
$router->get("sistema/back-end/clientes/{cliente}/contatos", "ContatosController@index");
$router->get("sistema/back-end/clientes/{cliente}/enderecos-entrega", "EnderecosController@buscarEnderecoEntrega");
$router->get("sistema/back-end/clientes/{cliente}/enderecos-faturamento", "EnderecosController@buscarEnderecoFaturamento");
$router->post("sistema/back-end/clientes/contatos", "ContatosController@cadastrar");

$router->post("sistema/back-end/clientes/enderecos-entregas", "EnderecosController@cadastrarEnderecoEntrega");
$router->post("sistema/back-end/clientes/enderecos-faturamentos", "EnderecosController@cadastrarEnderecoFaturamento");
$router->put("sistema/back-end/clientes/enderecos-entregas/{enderecoEntrega}", "EnderecosController@updateEnderecoEntrega");
$router->put("sistema/back-end/clientes/enderecos-faturamentos/{enderecoFaturamento}", "EnderecosController@updateEnderecoFaturamento");

$router->get("sistema/back-end/produtos", "ProdutosController@index");
$router->post("sistema/back-end/produtos", "ProdutosController@cadastrar");
$router->get("sistema/back-end/produtos/tipos", "ProdutosController@tipos");

$router->get("sistema/back-end/contratos", "ContratosController@index");
$router->get("sistema/back-end/contratos/{contrato}", "ContratosController@show");
$router->delete("sistema/back-end/contratos/{contrato}/adendos/{adendo}", "ContratosController@removerAdendo");
$router->post("sistema/back-end/adendos", "ContratosController@adicionarAdendos");
$router->post("sistema/back-end/contratos", "ContratosController@cadastrar");
$router->put("sistema/back-end/contratos/{contrato}", "ContratosController@update");

$router->post("sistema/back-end/clientes/contas-bancarias", "ContasBancariasController@cadastrar");
$router->get("sistema/back-end/clientes/{cliente}/contas-bancarias", "ContasBancariasController@show");
$router->get("sistema/back-end/adaptacao", "Adaptacao\AdaptacaoController@adaptarClientes");
$router->get("sistema/back-end/pdfs/contratos/{contrato}", "PDF\ContratosController@index");
$router->get("sistema/back-end/unidades-medidas", "UnidadesMedidasController@index");
