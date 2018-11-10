<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\Produto;

class ProdutosController
{
    public function index()
    {
        $produtos = App::get('db')->selectAll('produtos', Produto::class);
        // echo json_encode($produtos);
    }

    public function cadastrar($produto)
    {
        $produtoId = App::get('db')->insert('produtos', [
            'tipo' => $produto['tipo'],
            'nome' => $produto['nome'],
            'categoria' => $produto['categoria'],
        ]);

        // echo json_encode($produtoId);

    }
}
