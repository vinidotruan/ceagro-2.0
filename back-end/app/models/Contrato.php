<?php

namespace App\Models;

use App\Core\App;

class Contrato extends Model
{
    public $id;
    public $codigo;
    public $cliente_comprador_id;
    public $cliente_vendedor_id;
    public $produto_id;
    public $safra;
    public $quantidade;
    public $unidade_medida;
    public $descricao;
    public $comprador;
    public $vendedor;
    public $produto;
    protected static $table = "contratos";

    public function comprador()
    {
        return App::get('db')->select("select clientes.* from clientes inner join contratos on contratos.cliente_comprador_id = clientes.id where contratos.id = $this->id");
    }
    public function vendedor()
    {
        return App::get('db')->select("select clientes.* from clientes inner join contratos on contratos.cliente_vendedor_id = clientes.id where contratos.id = $this->id");
    }
    public function produto()
    {
        return App::get('db')->select("select produtos.* from produtos inner join contratos on contratos.produto_id = produtos.id where contratos.id = $this->id");
    }
}
