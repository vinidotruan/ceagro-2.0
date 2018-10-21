<?php

$router->get("ceagro/back-end/clientes", "ClientesController@index");
$router->post("ceagro/back-end/clientes", "ClientesController@cadastrar");
