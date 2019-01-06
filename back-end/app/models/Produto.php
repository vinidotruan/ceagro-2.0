<?php

namespace App\Models;

use App\Core\App;

class Produto extends Model
{
    public $id;
    public $nome;
    public $descricao = null;
    public $tipo_id;
    public $tipo;

    public static $table = "produtos";

    public function __construct()
    {
        $this->tipo();
    }

    public function tipo()
    {
        return $this->tipo = TipoProduto::find(["id", $this->tipo_id]);
    }
}
