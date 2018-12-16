<?php

namespace App\Models;

use App\Core\App;
use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Unidade;
use App\Models\Cfop;

class Contrato extends Model
{
    public $id;
    public $numero_confirmacao;
    public $vendedor_id;
    public $comprador_id;
    public $produto_id;
    public $preco;
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
    public $retirada_entrega;

    public $comprador;
    public $compradorEstabelecimento;
    public $vendedorEstabelecimento;
    public $contaBancaria;
    public $vendedor;
    public $produto;
    public $unidadeMedida;

    public $futuro = 160;
    public $atual = 1460;
    protected static $table = "contratos";


    public function __construct()
    {
        $this->comprador();
        $this->vendedor();
        $this->produto();
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
    
    public function unidade()
    {

        return $this->unidadeMedida = UnidadeMedida::find(["id", $this->unidade_medida_id]);
    }

    public function contaBancaria()
    {
        return $this->contaBancaria = ContaBancaria::find(['id', $this->vendedor_conta_bancaria_id]);
    }

    public function ultimoFuturo()
    {
        return static::contratosFuturos()->futuros + $this->futuro;
    }

    public function ultimoAtual()
    {
        return static::contratosAtuais()->atuais + $this->atual;
    }

    public function cfop()
    {
        return Cfop::find(['id', $this->cfop]);
    }
}
