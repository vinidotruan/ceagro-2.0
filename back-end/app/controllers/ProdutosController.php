<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\Produto;
use App\Models\TipoProduto;

class ProdutosController
{
    public function index()
    {
        $produtos = Produto::get();
        echo json_encode($produtos);
    }

    public function tipos()
    {
        $tipos = App::get('db')->selectAll('tipos_produtos', TipoProduto::class);
        echo json_encode($tipos);
    }

    public function store($produto)
    {
        $produtoId = App::get('db')->insert('produtos', [
            'tipo_id' => $produto['tipo_id'],
            'nome' => $produto['nome'],
            'codigo' => $produto['codigo'],
        ]);

        echo json_encode($produtoId);

    }
}
