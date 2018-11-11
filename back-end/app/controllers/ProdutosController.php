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

    public function unidadesMedidas()
    {
        $unidades = App::get('db')->selectAll('unidades_medidas', UnidadeMedida::class);
        echo json_encode($unidades);
    }

    public function cadastrar($produto)
    {
        $produtoId = App::get('db')->insert('produtos', [
            // :'id' => $produto['id'],
            'tipo_id' => $produto['tipo_id'],
            'nome' => $produto['nome'],
            'codigo' => $produto['codigo'],
        ]);

        echo json_encode($produtoId);

    }
}
