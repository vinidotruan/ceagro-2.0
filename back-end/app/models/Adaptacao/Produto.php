<?php

namespace App\Models\Adaptacao;

class Produto
{
    public $id_produto;
    public $id_empresa;
    public $id_operador;
    public $id_categoria;
    public $id_sub_categoria;
    public $codigo;
    public $titulo;
    public $descricao;
    public $valor_unitario;
    public $safra;
    public $peso;
    public $quantidade;
    public $qtd_min;
    public $qtd_max;
    public $ativo;
    public $data_cadastro;
}
