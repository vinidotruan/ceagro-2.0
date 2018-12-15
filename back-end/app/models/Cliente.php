<?php

namespace App\Models;

class Cliente extends Model
{
    public $id;
    public $nome_fantasia;
    public $razao_social;
    public $cnpj;
    public $inscricao_estadual;
    public $logistica_cotas;
    public $contasBancarias;
    public $endereco;

    public static $table = "clientes";

    public function __construct()
    {
        $this->endereco();
    }

    public function contasBancarias()
    {
        return $this->contasBancarias = ContaBancaria::find(["cliente_id", $this->id]);
    }

    public function endereco()
    {
        return $this->endereco = Endereco::find(["cliente_id", $this->id]);
    }
}
