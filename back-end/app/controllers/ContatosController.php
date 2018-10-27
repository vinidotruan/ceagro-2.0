<?php

namespace App\Controllers;

class ContatosController
{

    public function cadastrar()
    {
        $contatoId = App::get('db')->insert('contatos', [
            'telefonde' => $_POST['telefone'],
            'observacao' => $_POST['observação'],
        ]);

        $contato = App::get('db')->selectWhere('contatos', Contato::class, ['cliente_id', $contatoId]);
    }
}
