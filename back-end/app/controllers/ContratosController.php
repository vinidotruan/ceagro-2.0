<?php

namespace App\Controllers;

use App\Models\Contrato;

class ContratosController
{
    public function index()
    {
        $contratos = App::get('db')->selectAll("contratos", Contrato::class);
        echo json_encode($contratos);
    }

    public function cadastrar()
    {

        App::get('db')->insert('clientes', [
            'cnpj' => $_POST['cnpj'],
            'nome' => $_POST['nome'],
            'razao_social' => $_POST['razao_social'],
            'email' => $_POST['email'],
            // // 'assinatura' => $_POST['assinatura'],
            // // 'atuacao' => $_POST['atuacao'],
            'inscricao_estadual' => $_POST['inscricao_estadual'],
        ]);

    }
}
