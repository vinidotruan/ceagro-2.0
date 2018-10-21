<?php

namespace App\Controllers;

class ClientesController
{
    public function buscarTodos()
    {
        $usuarios = App::get('db')->selectAll("clientes", Cliente::class);
        return compact('clientes');
    }
    public function cadastrar()
    {
        print_r($_GET);
    }
}
