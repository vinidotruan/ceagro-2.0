<?php

namespace Controllers;

use Models\Cliente;

class ClienteController
{
    public function cadastrar($dados)
    {
        try {
            Cliente::cadastrar();
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
}
