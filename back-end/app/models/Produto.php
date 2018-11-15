<?php

namespace App\Models;

use App\Core\App;

class Produto extends Model
{
    public $id;
    public $nome;
    public $tipo_id;
    public $tipo;

    public static $table = "produtos";

    public function tipo()
    {
        return TipoProduto::find(["id", $this->tipo_id]);
    }
}
