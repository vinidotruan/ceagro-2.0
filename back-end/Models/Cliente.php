<?php

namespace Models;

use DAO\ClienteDAO;

class Cliente
{

    public $cnpj;
    public $nome;
    public $razao_social;
    public $responsavel;
    public $cidade;
    public $estado;
    public $email;
    public $telefone;
    public $assinatura;
    public $atuacao;

    public function cadastrar($dados)
    {
        ClienteDAO::cadastrar($dados);
    }

}
