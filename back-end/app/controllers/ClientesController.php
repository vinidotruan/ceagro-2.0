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
            'cnpj' => $_POST['cnpj'],
            'nome' => $_POST['nome'],
            'razao_social' => $_POST['razao_social'],
            'email' => $_POST['email'],
            // // 'assinatura' => $_POST['assinatura'],
            'atuacao' => $_POST['atuacao'],
            'inscricao_estadual' => $_POST['inscricao_estadual'],
        ]);

        $cliente = App::get('db')->selectWhere(
            'clientes',
            ["id", $clienteId]
        );

        echo json_encode($cliente);

    }
}
