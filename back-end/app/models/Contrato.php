<?php

namespace App\Models;

use App\Core\App;
use App\Models\Cliente;
use App\Models\Produto;

class Contrato extends Model
{
    public $id;
    public $empresa_id;
    public $contrato_status_id;
    public $vendedor_id;
    public $cliente_conta_bancaria_id;
    public $operador_id;
    public $produto_id;
    public $tipo_embarque;
    public $comprador_id;
    public $codigo_contrato;
    public $assinatura_vendedor;
    public $assinatura_comprador;
    public $quantidade_descricao;
    public $preco_texto;
    public $pagamento_texto;
    public $comissao;
    public $peso_qualidade;
    public $peso_total;
    public $unidade_medida_id;
    public $valor_contrato;
    public $data_cadastro;
    public $safra;
    public $comprador;
    public $vendedor;
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
