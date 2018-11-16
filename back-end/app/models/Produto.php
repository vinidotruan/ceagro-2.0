<?php

namespace App\Models;

use App\Core\App;

class Produto
{
    public $id;
    public $nome;
    public $tipo_id;
    public $tipo;

    public function tipo()
    {
        return App::get('db')->find("tipos_produtos", ["id", $this->tipo_id], TipoProduto::class)[0];
    }
}
