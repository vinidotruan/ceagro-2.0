<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\Banco;
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

    public function buscarBancos()
    {
        $bancos = App::get('db')->selectAll("bancos", Banco::class);
        echo json_encode($bancos);
    }
}
