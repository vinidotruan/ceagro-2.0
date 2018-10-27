<?php

namespace App\Controllers;

use App\Core\App;

class ContatosController
{

    public function cadastrar()
    {
        $contatoId = App::get('db')->insert('contatos', [
            'telefone' => $_POST['telefone'],
            'observacao' => $_POST['observacao'],
            'cliente_id' => $_POST['cliente_id'],
        ]);

        $contato = App::get('db')->selectWhere('contatos', ['cliente_id', $_POST['cliente_id']]);
        echo json_encode($contato);
    }
}
