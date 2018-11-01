<?php
// //busca de clientes
// $router->get("sistema/back-end/clientes", "ClientesController@index");
// $router->post("sistema/back-end/clientes", "ClientesController@cadastrar");

// $router->get("sistema/back-end/clientes/contatos", "ContatosControllerr@index");
// $router->post("sistema/back-end/clientes/contatos", "ContatosControllerr@cadastrar");

// $router->get("sistema/back-end/produtos", "ProdutosController@index");
// $router->post("sistema/back-end/produtos", "ProdutosController@cadastrar");

// $router->get("sistema/back-end/contratos", "ContratosController@index");
// $router->post("sistema/back-end/contratos", "ContratosController@cadastrar");
///OFFLINE///

// //busca de clientes
$router->get("sistema/back-end/clientes", "ClientesController@index");
$router->post("sistema/back-end/clientes", "ClientesController@cadastrar");

$router->get("sistema/back-end/clientes/bancos", "ClientesController@buscarBancos");
$router->get("sistema/back-end/cientes/contatos", "ContatosController@index");
$router->post("sistema/back-end/clientes/contatos", "ContatosController@cadastrar");

$router->get("sistema/back-end/cientes/enderecos-entregas", "EnderecosController@index");
$router->post("sistema/back-end/clientes/enderecos-entregas", "EnderecosController@cadastrarEnderecoEntrega");
$router->get("sistema/back-end/cientes/enderecos-faturamentos", "EnderecosController@index");
$router->post("sistema/back-end/clientes/enderecos-faturamentos", "EnderecosController@cadastrarEnderecoFaturamento");

$router->get("sistema/back-end/produtos", "ProdutosController@index");
$router->post("sistema/back-end/produtos", "ProdutosController@cadastrar");

$router->get("sistema/back-end/contratos", "ContratosController@index");
$router->post("sistema/back-end/contratos", "ContratosController@cadastrar");
// $router->post("ceagro/back-end/contratros", "ContratosController@cadastrar");
