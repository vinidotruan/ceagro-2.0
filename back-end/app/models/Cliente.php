<?php

namespace App\Models;

class Cliente extends Model
{
    public $id;
    public $razao_social;
    public $cnpj;
    public $inscricao_estadual;
    public $email;
    public $atuacao;
    public $enderecoFaturamento;
    public $enderecoEntrega;
    public $contasBancarias;

    public static $table = "clientes";

    public function __construct()
    {
    //     $this->enderecoEntrega();
    //     $this->enderecoFaturamento();
    }

    public function enderecoFaturamento()
    {
        return $this->enderecoFaturamento = EnderecoFaturamento::find(["cliente_id", $this->id]);
    }

    public function enderecoEntrega()
    {
        return $this->enderecoEntrega = EnderecoEntrega::find(["cliente_id", $this->id]);
    }

    public function contasBancarias()
    {
        return $this->contasBancarias = ContaBancaria::find(["cliente_id", $this->id]);
    }

    public static function vendedores()
    {
        return self::get(['atuacao', '"vendedor"']);
    }

    public static function compradores()
    {
        return self::get(['atuacao', '"comprador"']);
    }

    public static function ambos()
    {
        return self::get(['atuacao', '"ambos"']);
    }
}
