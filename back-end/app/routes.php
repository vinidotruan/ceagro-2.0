<?php
//busca de clientes
$router->get("ceagro/back-end/clientes", "ClientesController@index");
//cadastro de clientes
$router->post("ceagro/back-end/clientes", "ClientesController@cadastrar");

$router->get("ceagro/back-end/produtos", "ProdutosController@index");
$router->post("ceagro/back-end/produtos", "ProdutosController@cadastrar");

$router->get("ceagro/back-end/contratros", "ContratosController@index");
$router->post("ceagro/back-end/contratros", "ContratosController@cadastrar");
