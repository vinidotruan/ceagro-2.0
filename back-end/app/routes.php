<?php
<<<<<<< HEAD

$router->get("back-end/clientes", "ClientesController@index");
$router->get("/back-end/clientes", "ClientesController@index");
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
=======
use App\Core\App;

$urlBase = App::get('config')['rotas'];
$router->get("{$urlBase}numero-confirmacao", "ContratosController@numeroConfirmacao");

$router->get("{$urlBase}adaptar", "AdaptacaoController@index");

$router->get("{$urlBase}clientes", "ClientesController@index");
$router->post("{$urlBase}clientes", "ClientesController@store");
$router->get("{$urlBase}clientes/{cliente}", "ClientesController@show");
$router->put("{$urlBase}clientes/{cliente}", "ClientesController@update");

$router->get("{$urlBase}clientes/{cliente}/unidades", "UnidadesController@index");
$router->post("{$urlBase}unidades", "UnidadesController@store");
$router->put("{$urlBase}unidades/{unidade}", "UnidadesController@update");

$router->get("{$urlBase}enderecos", "EnderecosController@index");
$router->get("{$urlBase}clientes/{cliente}/enderecos", "EnderecosController@index");
$router->post("{$urlBase}clientes/enderecos", "EnderecosController@store");
$router->put("{$urlBase}clientes/enderecos/{endereco}", "EnderecosController@update");

$router->post("{$urlBase}clientes/contas-bancarias", "ContasBancariasController@store");
$router->put("{$urlBase}contas-bancarias/{contaBancaria}", "ContasBancariasController@update");
$router->get("{$urlBase}clientes/{cliente}/contas-bancarias", "ContasBancariasController@show");

$router->get("{$urlBase}clientes/{cliente}/estabelecimentos", "EstabelecimentosController@index");
$router->get("{$urlBase}estabelecimentos", "EstabelecimentosController@index");
$router->get("{$urlBase}estabelecimentos/{estabelecimento}", "EstabelecimentosController@show");
$router->post("{$urlBase}estabelecimentos", "EstabelecimentosController@store");

$router->get("{$urlBase}produtos", "ProdutosController@index");
$router->post("{$urlBase}produtos", "ProdutosController@store");
$router->put("{$urlBase}produtos/{produto}", "ProdutosController@update");
$router->delete("{$urlBase}produtos/{produto}", "ProdutosController@destroy");

$router->get("{$urlBase}contratos", "ContratosController@index");
$router->get("{$urlBase}contratos/{contrato}", "ContratosController@show");
$router->post("{$urlBase}contratos", "ContratosController@store");
$router->put("{$urlBase}contratos/{contrato}", "ContratosController@update");
$router->get("{$urlBase}contratos/futuros", "ContratosController@contratosFuturos");
$router->get("{$urlBase}contratos/atuais", "ContratosController@contratosAtuais");
$router->get("{$urlBase}contratos/dados-compradores", "ContratosController@dados");
$router->get("{$urlBase}contratos/dados-vendedores", "ContratosController@dados2");

$router->get("{$urlBase}contratos/{contrato}/adendos", "AdendosController@index");
$router->post("{$urlBase}contratos/adendos", "AdendosController@store");
$router->put("{$urlBase}adendos/{adendo}", "AdendosController@update");
$router->delete("{$urlBase}adendos/{adendo}", "AdendosController@destroy");

$router->get("{$urlBase}pdfs/contratos/{contrato}", "PDF\ContratosController@index");
$router->get("{$urlBase}unidades-medidas", "UnidadesMedidasController@index");
>>>>>>> c31a5b391694c06087faf70c2a62852bb01e4a3b
