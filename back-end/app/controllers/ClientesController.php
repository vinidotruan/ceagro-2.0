<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\Banco;
use App\Models\Cliente;

class ClientesController
{
    public function index()
    {
        $clientes = Cliente::get(["razao_social", "!=", "' '"]);
        echo json_encode($clientes);
    }

    public function buscarEnderecoEntrega($cliente)
    {

    }

    public function buscarVendedores()
    {
        $vendedores = Cliente::vendedores();
        $ambos = Cliente::ambos();
        $vendedoresA = array_unique(array_merge($vendedores, $ambos), SORT_REGULAR);
        echo json_encode($vendedoresA);
    }

    public function buscarCompradores()
    {
        $compradores = Cliente::compradores();
        $ambos = Cliente::ambos();
        $compradores = array_unique(array_merge($compradores, $ambos), SORT_REGULAR);

        echo json_encode($compradores);
    }

    public function show($id)
    {
        $cliente = Cliente::find(["id", $id]);
        echo json_encode($cliente);
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

        $ultimoCliente = Cliente::find(["id", $clienteId]);

        echo json_encode($ultimoCliente);
    }

    public function buscarBancos()
    {
        $bancos = App::get('db')->selectAll("bancos", Banco::class);
        echo json_encode($bancos);
    }

    public function update($cliente)
    {
        try {
            $clienteId = App::get('db')->update(
                'clientes',
                [
                    'razao_social' => $cliente['razao_social'],
                    'cnpj' => $cliente['cnpj'],
                    'inscricao_estadual' => $cliente['inscricao_estadual'],
                    'nome' => $cliente['nome'] ?? "",
                    'email' => $cliente['email'],
                    'atuacao' => $cliente['atuacao'],
                ],
                ["id", $cliente['cliente']]
            );

            $cliente = Cliente::find(["id", $clienteId]);

            echo json_encode($cliente);

        } catch (\Exception $exception) {
            echo json_encode($exception);
        }
    }
}
