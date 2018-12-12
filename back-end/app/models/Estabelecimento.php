<?php

namespace App\Models;

class Estabelecimento extends Model{

    public $id;
    public $cliente_id;
    
    public static $table = "estabelecimentos";

    public function endereco()
    {
        return $this->enderco = Endereco::find(["cliente_id", $this->id]);
    }
}