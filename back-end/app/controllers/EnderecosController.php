<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\EnderecoEntrega;
use App\Models\EnderecoFaturamento;
use App\Models\Cliente;

class EnderecosController
{
    public function index($cliente)
    {
        if ($cliente) {
            $endereco = Cliente::find(["id", $cliente])->endereco();
        } else {
            $endereco = Endereco::get();
        }
        echo json_encode($endereco);
    }
    public function store($endereco)
    {
        $enderecoId = App::get('db')->insert('enderecos_faturamentos', [
            'rua' => $endereco['rua'],
            'numero' => $endereco['numero'],
            'complemento' => $endereco['complemento'],
            'bairro' => $endereco['bairro'],
            'cidade' => $endereco['cidade'],
            'estado' => $endereco['estado'],
            'cep' => $endereco['cep'],
            'cliente_id' => $endereco['cliente_id'],
        ]);
        $endereco = EnderecoFaturamento::find(["id", $enderecoId]);
        echo json_encode($endereco);

    }

    public function update($endereco)
    {
        $enderecoId = App::get('db')->update(
            'enderecos_faturamentos',
            [
                'rua' => $endereco['rua'],
                'numero' => $endereco['numero'],
                'complemento' => $endereco['complemento'],
                'bairro' => $endereco['bairro'],
                'cidade' => $endereco['cidade'],
                'estado' => $endereco['estado'],
                'cep' => $endereco['cep'],
            ],
            ["id", $endereco['id']]
        );

        $endereco = EnderecoFaturamento::find(["id", $enderecoId]);
        echo json_encode($endereco);

    }
}
