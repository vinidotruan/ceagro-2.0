<?php

namespace App\Models;

class Unidade extends Model{

    public $id;
    public $cliente_id;
    public $razao_social;
    public $cnpj;
    public $inscricao_estadual;
    
    public static $table = "unidades";

    public function endereco()
    {
        return $this->enderco = Endereco::find(["cliente_id", $this->id]);
    }
}