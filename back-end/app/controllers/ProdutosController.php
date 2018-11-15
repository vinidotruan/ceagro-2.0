<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\Produto;
use App\Models\TipoProduto;

class ProdutosController
{
    public function index()
    {
        $produtos = App::get('db')->selectAll('produtos', Produto::class);

        foreach ($produtos as $key => &$produto) {
            $produto->tipo = $produto->tipo();
        }
        echo json_encode($produtos);
    }

    public function tipos()
    {
        $tipos = App::get('db')->selectAll('tipos_produtos', TipoProduto::class);
        echo json_encode($tipos);
    }

    public function cadastrar($produto)
    {
        $produtoId = App::get('db')->insert('produtos', [
            'id' => $produto['id'],
            'tipo_id' => $produto['tipo_id'],
            'nome' => $produto['nome'],
            'codigo' => $produto['codigo'],
        ]);

        // echo json_encode($produtoId);
        return $produtoId;

    }
}
