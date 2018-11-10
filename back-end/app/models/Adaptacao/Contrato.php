<?php

namespace App\Models\Adaptacao;

class Contrato
{

    public $id_contrato;
    public $id_empresa;
    public $id_contrato_status;
    public $id_vendedor;
    public $id_cliente_conta_bancaria;
    public $id_operador;
    public $id_produto;
    public $tipo_embarque;
    public $id_comprador;
    public $codigo_contrato;
    public $dados_vendedor_texto;
    public $dados_comprador_texto;
    public $ac_vendedor;
    public $ac_comprador;
    public $quantidade_descricao;
    public $preco_texto;
    public $pagamento_texto;
    public $clausula_1_vendedor;
    public $clausula_2_vendedor;
    public $clausula_3_vendedor;
    public $clausula_1_comprador;
    public $clausula_2_comprador;
    public $clausula_3_comprador;
    public $condicao_esp_vendedor;
    public $condicao_esp_comprador;
    public $comissao;
    public $peso_qualidade;
    public $cmp_assinatura_vendedor;
    public $cmp_assinatura_comprador;
    public $peso_total;
    public $id_unidade_medida;
    public $valor_contrato;
    public $data_cadastr;
}
