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
        // echo json_encode($clientes);
    }

    public function cadastrar($cliente)
    {
        $clienteId = App::get('db')->insert('clientes', [
            'razao_social' => $cliente['razao_social'],
            'cnpj' => $cliente['cnpj'],
            'inscricao_estadual' => $cliente['inscricao_estadual'],
            'nome' => $cliente['nome'] ?? "",
            'email' => $cliente['email'],
            'atuacao' => $cliente['atuacao'],
        ]);

        $ultimoCliente = App::get('db')->selectWhere(
            'clientes',
            ["id", $clienteId]
        );

        // echo json_encode($ultimoCliente);
        return $ultimoCliente;
    }

    public function buscarBancos()
    {
        $bancos = App::get('db')->selectAll("bancos", Banco::class);
        // echo json_encode($bancos);
    }
}
