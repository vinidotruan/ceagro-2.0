<?php

namespace App\Models;

class Unidade extends Model{

    public $id;
    public $cliente_id;
    public $razao_social;
    public $cnpj;
    public $inscricao_estadual;
    public $endereco;
    
    public static $table = "unidades";

    public function __construct()
    {
        $this->endereco();
    }

    public function endereco()
    {
        return $this->endereco = Endereco::find(["unidade_id", $this->id]);
    }
}