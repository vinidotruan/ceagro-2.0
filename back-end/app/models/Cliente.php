<?php

namespace App\Models;

class Cliente extends Model
{
    public $id;
    public $nome_fantasia;
    public $contasBancarias;
    public $endereco;
    public $razao_social;
    public $cnpj;
    public $inscricao_estadual;

    public static $table = "clientes";

    public function contasBancarias()
    {
        return $this->contasBancarias = ContaBancaria::find(["cliente_id", $this->id]);
    }

    public function endereco()
    {
        return $this->enderco = Endereco::find(["cliente_id", $this->id]);
    }
}
