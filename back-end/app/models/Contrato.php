<?php

namespace App\Models;

class Contrato
{
    public $id;
    public $numero;
    public $cliente_comprador_id;
    public $cliente_vendedor_id;
    public $produto_id;
    public $safra;
    public $quantidade;
    public $unidade_medida;
    public $descricao;
}
