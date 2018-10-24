<?php
//busca de clientes
$router->get("sistema/back-end/clientes", "ClientesController@index");
//buscar enderecos
//$router->get("sistema/back-end/clientes/enderecos", "EnderecosController@index");
//cadastro de clientes
$router->post("sistema/back-end/clientes", "ClientesController@cadastrar");

$router->get("sistema/back-end/produtos", "ProdutosController@index");
$router->post("sistema/back-end/produtos", "ProdutosController@cadastrar");

$router->get("sistema/back-end/contratros", "ContratosController@index");
$router->post("sistema/back-end/contratros", "ContratosController@cadastrar");

///OFFLINE///

// //busca de clientes
$router->get("ceagro/back-end/clientes", "ClientesController@index");
//buscar enderecos
$router->get("ceagro/back-end/clientes/enderecos", "EnderecosController@index");
//cadastro de clientes
$router->post("ceagro/back-end/clientes", "ClientesController@cadastrar");

$router->get("ceagro/back-end/produtos", "ProdutosController@index");
$router->post("ceagro/back-end/produtos", "ProdutosController@cadastrar");

$router->get("ceagro/back-end/contratros", "ContratosController@index");
// $router->post("ceagro/back-end/contratros", "ContratosController@cadastrar");
