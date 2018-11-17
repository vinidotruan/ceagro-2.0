<?php
// //busca de clientes
$router->get("ceagro/back-end/clientes", "ClientesController@index");
$router->post("ceagro/back-end/clientes", "ClientesController@cadastrar");
$router->get("ceagro/back-end/clientes/{cliente}", "ClientesController@show");

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
$router->get("ceagro/back-end/produtos/tipos", "ProdutosController@tipos");

$router->get("ceagro/back-end/contratos", "ContratosController@index");
$router->get("ceagro/back-end/contratos/{contrato}", "ContratosController@show");
$router->post("ceagro/back-end/contratos", "ContratosController@cadastrar");
$router->put("ceagro/back-end/contratos/{contrato}", "ContratosController@update");

$router->post("ceagro/back-end/clientes/contas-bancarias", "ContasBancariasController@cadastrar");
$router->get("ceagro/back-end/adaptacao", "Adaptacao\AdaptacaoController@adaptarClientes");
$router->get("ceagro/back-end/pdfs/contratos/{contrato}", "PDF\ContratosController@index");
$router->get("ceagro/back-end/unidades-medidas", "UnidadesMedidasController@index");
// $router->post("sistema/back-end/contratros", "ContratosController@cadastrar");
