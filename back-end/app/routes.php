<?php

$router->get("ceagro/back-end/clientes", "ClientesController@buscar");
$router->post("ceagro/back-end/clientes", "ClientesController@cadastrar");
