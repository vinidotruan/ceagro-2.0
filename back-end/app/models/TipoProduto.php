<?php

namespace App\Models;

class TipoProduto extends Model
{
    public $id;
    public $descricao;

    public static $table = "tipos_produtos";

    public function __construct()
    {
    }
}
