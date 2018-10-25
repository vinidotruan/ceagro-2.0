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
        App::get('db')->insert('produtos', [
            'titulo' => $_POST['titulo'],
        ]);

    }
}
