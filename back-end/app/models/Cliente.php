<?php

namespace App\Models;

class Cliente extends Model
{
    public $id;
    public $nome_fantasia;
    public $logistica_cotas;
    public $razao_social;
    public $cnpj;
    public $inscricao_estadual;
    
    public $contasBancarias;
    public $endereco;
    public $unidades;

    public static $table = "clientes";

    public function __construct()
    {
        // $this->endereco();
        // $this->unidades();
    }

    public function contasBancarias()
    {
        return $this->contasBancarias = ContaBancaria::find(["cliente_id", $this->id]);
    }

    public function endereco()
    {
        return $this->endereco = Endereco::find(["cliente_id", $this->id]);
    }

    public function unidades()
    {
        return $this->unidades = Unidade::get(["cliente_id", "=",$this->id]);
    }
}
