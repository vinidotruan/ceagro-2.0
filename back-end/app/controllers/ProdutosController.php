<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\Produto;

class ProdutosController
{
    public function index()
    {
        $produtos = App::get('db')->selectAll('produtos', Produto::class);
        echo json_encode($produtos);
    }

    public function cadastrar()
    {
        $produtoId = App::get('db')->insert('produtos', [
            'tipo' => $_POST['tipo'],
            'nome' => $_POST['nome'],
            'categoria' => $_POST['categoria'],
        ]);

        echo json_encode($produtoId);

    }
}
