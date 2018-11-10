<?php
// //busca de clientes
$router->get("ceagro/back-end/clientes", "ClientesController@index");
$router->post("ceagro/back-end/clientes", "ClientesController@cadastrar");

$router->get("ceagro/back-end/clientes/bancos", "ClientesController@buscarBancos");
$router->get("ceagro/back-end/clientes/contatos", "ContatosController@index");
$router->get("ceagro/back-end/clientes/{cliente}/contatos", "ContatosController@index");
$router->post("ceagro/back-end/clientes/contatos", "ContatosController@cadastrar");

$router->get("ceagro/back-end/cientes/enderecos-entregas", "EnderecosController@index");
$router->post("ceagro/back-end/clientes/enderecos-entregas", "EnderecosController@cadastrarEnderecoEntrega");
$router->get("ceagro/back-end/cientes/enderecos-faturamentos", "EnderecosController@index");
$router->post("ceagro/back-end/clientes/enderecos-faturamentos", "EnderecosController@cadastrarEnderecoFaturamento");

$router->get("ceagro/back-end/produtos", "ProdutosController@index");
$router->post("ceagro/back-end/produtos", "ProdutosController@cadastrar");

$router->get("ceagro/back-end/contratos", "ContratosController@index");
$router->get("ceagro/back-end/contratos/{contrato}", "ContratosController@find");
$router->post("ceagro/back-end/contratos", "ContratosController@cadastrar");
$router->put("ceagro/back-end/contratos/{contrato}", "ContratosController@update");

$router->get("ceagro/back-end/contas-bancarias", "ContasBancariasController@index");
$router->get("ceagro/back-end/adaptacao", "Adaptacao\AdaptacaoController@adaptarClientes");
// $router->post("ceagro/back-end/contratros", "ContratosController@cadastrar");
