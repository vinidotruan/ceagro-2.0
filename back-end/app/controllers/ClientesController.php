<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\Cliente;

class ClientesController
{
    public function index()
    {
        $clientes = App::get('db')->selectAll("clientes", Cliente::class);
        echo json_encode($clientes);
    }

    public function cadastrar()
    {

        $clienteId = App::get('db')->insert('clientes', [
            'banco_id' => $_POST['banco_id'],
            'razao_social' => $_POST['razao_social'],
            'cnpj' => $_POST['cnpj'],
            'inscricao_estadual' => $_POST['inscricao_estadual'],
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'atuacao' => $_POST['atuacao'],
        ]);

        $cliente = App::get('db')->selectWhere(
            'clientes',
            ["id", $clienteId]
        );

        echo json_encode($cliente);

    }
}
