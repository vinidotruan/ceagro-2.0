<?php

namespace App\Models;

use App\Core\App;
use App\Models\Cliente;
use App\Models\Produto;

class Contrato extends Model
{
    public $id;
    public $vendedor_id;
    public $produto_id;
    public $comprador_id;
    public $codigo;
    public $assinatura_vendedor;
    public $assinatura_comprador;
    public $quantidade;
    public $observacao;
    public $unidade_medida_id;
    public $valor;
    public $safra;
    public $vendedor;
    public $comprador;
    public $produto;

    protected static $table = "contratos";

    public function comprador()
    {
        return App::get('db')->find("clientes", ["id", $this->comprador_id], Cliente::class)[0];
    }
    public function vendedor()
    {
        return App::get('db')->find("clientes", ["id", $this->vendedor_id], Cliente::class)[0];
    }
    public function produto()
    {
        return App::get('db')->find("produtos", ["id", $this->produto_id], Produto::class)[0];
    }
}
