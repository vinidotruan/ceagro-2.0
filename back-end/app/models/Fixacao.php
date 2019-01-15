<?php

namespace App\Models;

<<<<<<< HEAD
class Fixacao
{
    public $id;
    public $id_contrato;
    public $quantidade;
    public $preco;
    public $local_embarque;
    public $contas_bancarias;
    public $data_pagamento;
    public $descricao;
}
=======
use App\Models\Model;

class Fixacao extends Model
{

    public $id;
    public $quantidade;
    public $preco;
    public $local_embarque;
    public $data_pagamento;
    public $contrato_id;
    public $conta_bancaria_vendedor_id;
    public $contaBancaria;

    public static $table = "fixacoes";

    public function __construct()
    {
        $this->contasBancarias();
    }

    public function contasBancarias()
    {
        return $this->contaBancaria = ContaBancaria::find(["id", $this->conta_bancaria_vendedor_id]);
    }
}
>>>>>>> 834defead1d3967125df3337328af45771a30baa
