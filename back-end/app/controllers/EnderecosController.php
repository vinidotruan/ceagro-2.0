<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\EnderecoEntrega;
use App\Models\EnderecoFaturamento;
use App\Models\Cliente;

class EnderecosController
{
    public function buscarEnderecoEntrega($cliente)
    {
        if ($cliente) {
            $enderecoEntrega = Cliente::find(["id", $cliente])->enderecoEntrega();
        } else {
            $enderecoEntrega = EnderecoEntrega::get();
        }
        echo json_encode($enderecoEntrega);
    }

    public function buscarEnderecoFaturamento($cliente)
    {
        if ($cliente) {
            $enderecoFaturamento = Cliente::find(["id", $cliente])->enderecoFaturamento();
        } else {
            $enderecoFaturamento = EnderecoFaturamento::get();
        }
        echo json_encode($enderecoFaturamento);
    }

    public function cadastrarEnderecoFaturamento($enderecoFaturamento)
    {
        $enderecoFaturamentoId = App::get('db')->insert('enderecos_faturamentos', [
            'rua' => $enderecoFaturamento['rua'],
            'numero' => $enderecoFaturamento['numero'],
            'complemento' => $enderecoFaturamento['complemento'],
            'bairro' => $enderecoFaturamento['bairro'],
            'cidade' => $enderecoFaturamento['cidade'],
            'estado' => $enderecoFaturamento['estado'],
            'cep' => $enderecoFaturamento['cep'],
            'cliente_id' => $enderecoFaturamento['cliente_id'],
        ]);
        $enderecoFaturamento = EnderecoFaturamento::find(["id", $enderecoFaturamentoId]);
        echo json_encode($enderecoFaturamento);

    }

    public function cadastrarEnderecoEntrega($enderecoEntrega)
    {
        $enderecoEntregaId = App::get('db')->insert('enderecos_entregas', [
            'rua' => $enderecoEntrega['rua'],
            'numero' => $enderecoEntrega['numero'],
            'complemento' => $enderecoEntrega['complemento'],
            'bairro' => $enderecoEntrega['bairro'],
            'cidade' => $enderecoEntrega['cidade'],
            'estado' => $enderecoEntrega['estado'],
            'cep' => $enderecoEntrega['cep'],
            'cliente_id' => $enderecoEntrega['cliente_id'],
        ]);

        $enderecoEntrega = EnderecoEntrega::find(["id", $enderecoEntregaId]);
        echo json_encode($enderecoEntrega);
    }

    public function updateEnderecoFaturamento($enderecoFaturamento)
    {
        $enderecoFaturamentoId = App::get('db')->update(
            'enderecos_faturamentos',
            [
                'rua' => $enderecoFaturamento['rua'],
                'numero' => $enderecoFaturamento['numero'],
                'complemento' => $enderecoFaturamento['complemento'],
                'bairro' => $enderecoFaturamento['bairro'],
                'cidade' => $enderecoFaturamento['cidade'],
                'estado' => $enderecoFaturamento['estado'],
                'cep' => $enderecoFaturamento['cep'],
            ],
            ["id", $enderecoFaturamento['id']]
        );

        $enderecoFaturamento = EnderecoFaturamento::find(["id", $enderecoFaturamentoId]);
        echo json_encode($enderecoFaturamento);

    }

    public function updateEnderecoEntrega($enderecoEntrega)
    {
        $enderecoEntregaId = App::get('db')->update(
            'enderecos_entregas',
            [
                'rua' => $enderecoEntrega['rua'],
                'numero' => $enderecoEntrega['numero'],
                'complemento' => $enderecoEntrega['complemento'],
                'bairro' => $enderecoEntrega['bairro'],
                'cidade' => $enderecoEntrega['cidade'],
                'estado' => $enderecoEntrega['estado'],
                'cep' => $enderecoEntrega['cep'],
                'cliente_id' => $enderecoEntrega['cliente_id'],
            ],
            ["id", $enderecoEntrega['id']]
        );

        $enderecoEntrega = EnderecoEntrega::find(["id", $enderecoEntregaId]);
        echo json_encode($enderecoEntrega);
    }
}
