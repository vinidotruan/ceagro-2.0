<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\Cliente;

class ClientesController
{
    public function index()
    {
        $usuarios = App::get('db')->selectAll("clientes", Cliente::class);
        return compact('clientes');
    }

    public function cadastrar()
    {
        App::get('db')->insert('clientes', [
            //'cnpj' => $_POST['cnpj'],
            'nome' => $_POST['nome'],
            //'razao_social' => $_POST['razao_social'],
            //'responsavel' => $_POST['responsavel'],
            //'cidade' => $_POST['cidade'],
            //'estado' => $_POST['estado'],
            //'email' => $_POST['email'],
            //'telefone' => $_POST['telefone'],
            //'assinatura' => $_POST['assinatura'],
            //'atuacao' => $_POST['atuacao'],
            //'inscricao_estadual' => $_POST['inscricao_estadual'],
            //'telefone2' => $_POST['telefone2'],
            //'obs' => $_POST['obs'],
        ]);

    }
}
