<?php

namespace App\Controllers;

use App\Core\App;

class EnderecosController
{
    public function cadastrarEnderecoFaturamento()
    {

        $enderecoFaturamentoId = App::get('db')->insert('enderecos_faturamentos', [
            'cliente_id' => $_POST['cliente_id'],
            'cep' => $_POST['cep'],
            'complemento' => $_POST['complemento'],
            'bairro' => $_POST['bairro'],
        ]);

        $enderecoFaturamento = App::get('db')->selectWhere('enderecos_faturamento', ["id", $enderecoFaturamentoId]);

    }

    public function cadastrarEnderecoEntrega()
    {
        $enderecoEntregaId = App::get('db')->insert('enderecos_entregas', [
            'cliente_id' => $_POST['cliente_id'],
            'cep' => $_POST['cep'],
            'complemento' => $_POST['complemento'],
            'bairro' => $_POST['bairro'],
        ]);

        $enderecoEntrega = App::get('db')->selectWhere('enderecos_entregas', ["id", $enderecoEntregaId]);
    }
}
