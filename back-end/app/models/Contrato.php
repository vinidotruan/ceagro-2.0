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
    public $cliente_conta_bancaria_id;
    public $operador_id;
    public $peso_total;

    public $pagamento_texto; //
    public $vendedor_id; //
    public $produto_id; //
    public $tipo_embarque; //
    public $comprador_id; //
    public $codigo; //
    public $assinatura_vendedor; //
    public $assinatura_comprador; //
    public $quantidade_descricao; //
    public $preco_texto; //
    public $comissao; //
    public $peso_qualidade; //
    public $unidade_medida_id;
    public $valor_contrato; //
    public $data_cadastro; //
    public $safra; //

    public $comprador;
    public $vendedor;
    public $produto;

    protected static $table = "contratos";

    public function __construct()
    {
        $this->comprador();
        $this->vendedor();
        $this->produto();
    }

    public function comprador()
    {
        return $this->comprador = Cliente::find(["id", $this->comprador_id]);
    }
    public function vendedor()
    {
        return $this->vendedor = Cliente::find(["id", $this->vendedor_id]);
    }
    public function produto()
    {
        return $this->produto = Produto::find(["id", $this->produto_id]);
    }
}
