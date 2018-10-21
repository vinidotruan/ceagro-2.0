<?php

$router->get("ceagro/back-end/clientes", "ClientesController@buscarClientes");
$router->post("/ceagro/back-end/clientes", "ClientesController@cadastrarClientes");
