<?php

$router->get("ceagro/back-end/clientes", "ClientesController@index");
$router->post("ceagro/back-end/clientes", "ClientesController@store");
$router->get("ceagro/back-end/clientes/{cliente}", "ClientesController@show");
$router->put("ceagro/back-end/clientes/{cliente}", "ClientesController@update");

$router->get("ceagro/back-end/clientes/contatos", "ContatosController@index");
$router->get("ceagro/back-end/clientes/{cliente}/contatos", "ContatosController@index");
$router->post("ceagro/back-end/clientes/contatos", "ContatosController@store");

$router->get("ceagro/back-end/clientes/{cliente}/enderecos", "EnderecosController@index");
$router->post("ceagro/back-end/clientes/enderecos", "EnderecosController@store");
$router->put("ceagro/back-end/clientes/enderecos/{endereco}", "EnderecosController@update");

$router->post("ceagro/back-end/clientes/contas-bancarias", "ContasBancariasController@store");
$router->get("ceagro/back-end/clientes/{cliente}/contas-bancarias", "ContasBancariasController@show");

$router->get("ceagro/back-end/clientes/{cliente}/estabelecimentos", "EstabelecimentosController@index");
$router->get("ceagro/back-end/estabelecimentos", "EstabelecimentosController@index");
$router->get("ceagro/back-end/estabelecimentos/{estabelecimento}", "EstabelecimentosController@show");
$router->post("ceagro/back-end/estabelecimentos", "EstabelecimentosController@store");

$router->get("ceagro/back-end/produtos", "ProdutosController@index");
$router->post("ceagro/back-end/produtos", "ProdutosController@store");
$router->get("ceagro/back-end/produtos/tipos", "ProdutosController@tipos");

$router->get("ceagro/back-end/contratos", "ContratosController@index");
$router->get("ceagro/back-end/contratos/{contrato}", "ContratosController@show");
$router->post("ceagro/back-end/contratos", "ContratosController@store");

$router->put("ceagro/back-end/contratos/{contrato}", "ContratosController@update");

$router->delete("ceagro/back-end/contratos/{contrato}/adendos/{adendo}", "ContratosController@removerAdendo");
$router->post("ceagro/back-end/adendos", "ContratosController@adicionarAdendos");

$router->get("ceagro/back-end/adaptacao", "Adaptacao\AdaptacaoController@adaptarClientes");
$router->get("ceagro/back-end/pdfs/contratos/{contrato}", "PDF\ContratosController@index");
$router->get("ceagro/back-end/unidades-medidas", "UnidadesMedidasController@index");
