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

    public function cadastrar($cliente)
    {
        $clienteId = App::get('db')->insert('clientes', [
            'id' => $cliente['id'],
            'razao_social' => $cliente['razao_social'],
            'cnpj' => $cliente['cnpj'],
            'inscricao_estadual' => $cliente['inscricao_estadual'],
            'nome' => $cliente['nome'] ?? "",
            'email' => $cliente['email'],
            'atuacao' => $cliente['atuacao'],
        ]);

        // $ultimoCliente = App::get('db')->selectWhere(
        //     'clientes',
        //     ["id", $clienteId]
        // );

        // echo json_encode($ultimoCliente);
        return $clienteId;
    }

    public function buscarBancos()
    {
        $bancos = App::get('db')->selectAll("bancos", Banco::class);
        echo json_encode($bancos);
    }


public function update($cliente)
{
    try {
        $clienteId = App::get('db')->update('clientes', [
            'razao_social' => $cliente['razao_social'],
            'cnpj' => $cliente['cnpj'],
            'inscricao_estadual' => $cliente['inscricao_estadual'],
            'nome' => $cliente['nome'] ?? "",
            'email' => $cliente['email'],
            'atuacao' => $cliente['atuacao'],
        ],
            ["id", $cliente['cliente']]);

        $cliente = App::get('db')->selectWhere(
            'clientes',
            ["id", $clienteId]
        )[0];

        echo json_encode($cliente);

    } catch (\Exception $exception) {
        echo json_encode($exception);
    }
}
}