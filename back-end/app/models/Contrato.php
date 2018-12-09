<?php

namespace App\Models;

use App\Core\App;
use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Estabelecimento;
use App\Models\Adendo;

class Contrato extends Model
{
    public $id;
    public $numero_confirmacao;
    public $vendedor_id;
    public $comprador_id;
    public $produto_id;
    public $unidade_medida_id;
    public $safra;
    public $quantidade;
    public $descricao;
    public $pagamento;
    public $tipo_embarque;
    public $local;
    public $data_embarque;
    public $peso_qualidade;
    public $cfop;
    public $solicitacao_cotas;
    public $carregamento;
    public $assinatura_vendedor;
    public $assinatura_comprador;
    public $observacao;
    public $comissao;
    public $data_cadastro;
    public $valor_contrato;
    public $peso_total;
    public $vendedor_conta_bancaria_id;
    public $vendedor_estabelecimento_id;
    public $comprador_estabelecimento_id;

    public $adendos;
    public $comprador;
    public $compradorEstabelecimento;
    public $vendedorEstabelecimento;
    public $contaBancaria;
    public $vendedor;
    public $produto;
    public $unidadeMedida;

    protected static $table = "contratos";

    public function __construct()
    {
        $this->comprador();
        $this->vendedor();
        $this->produto();
        $this->adendos();
        $this->unidade();
        $this->contaBancaria();
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

    public function adendos()
    {
        return $this->adendos = Adendo::get(['contrato_id', $this->id]);
    }
    public function unidade()
    {

        return $this->unidadeMedida = UnidadeMedida::find(["id", $this->unidade_medida_id]);
    }

    public function contaBancaria()
    {
        return $this->contaBancaria = ContaBancaria::find(['id', $this->vendedor_conta_bancaria_id]);
    }
}
