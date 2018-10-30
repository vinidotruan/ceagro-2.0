<?php

namespace App\Controllers;

use App\Core\App;

class EnderecosController
{
    public function cadastrarEnderecoFaturamento()
    {
        $enderecoFaturamentoId = App::get('db')->insert('enderecos_faturamentos', [
            'rua' => $_POST['rua'],
            'numero' => $_POST['numero'],
            'complemento' => $_POST['complemento'],
            'bairro' => $_POST['bairro'],
            'cidade' => $_POST['cidade'],
            'estado' => $_POST['estado'],
            'cep' => $_POST['cep'],
            'cliente_id' => $_POST['cliente_id'],
        ]);
        $enderecoFaturamento = App::get('db')->selectWhere('enderecos_faturamentos', ["id", $enderecoFaturamentoId]);
        echo json_encode($enderecoFaturamento);

    }

    public function cadastrarEnderecoEntrega()
    {
        $enderecoEntregaId = App::get('db')->insert('enderecos_entregas', [
            'rua' => $_POST['rua'],
            'numero' => $_POST['numero'],
            'complemento' => $_POST['complemento'],
            'bairro' => $_POST['bairro'],
            'cidade' => $_POST['cidade'],
            'estado' => $_POST['estado'],
            'cep' => $_POST['cep'],
            'cliente_id' => $_POST['cliente_id'],
        ]);

        $enderecoEntrega = App::get('db')->selectWhere('enderecos_entregas', ["id", $enderecoEntregaId]);
        echo json_encode($enderecoEntrega);
    }
}
