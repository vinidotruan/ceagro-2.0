<?php

namespace App\Models;

class Cliente extends Model
{
    public $id;
    public $nome_fantasia;
    public $contasBancarias;

    public static $table = "clientes";

    public function contasBancarias()
    {
        return $this->contasBancarias = ContaBancaria::find(["cliente_id", $this->id]);
    }
}
