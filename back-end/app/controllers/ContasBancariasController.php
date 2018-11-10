<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\ContaBancaria;

class ContasBancariasController
{
    public function index()
    {
        $contas = App::get('db')->selectAll('contas_bancarias', ContaBancaria::class);
        echo json_encode($contas);
    }

    public function cadastrar()
    {
        $contaId = App::get('db')->insert('contas_bancarias',
            []);
    }
}
