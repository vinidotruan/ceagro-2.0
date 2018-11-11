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

    public function cadastrar($conta)
    {
        $contaId = App::get('db')->insert('contas_bancarias', [
            "id" => intval($conta['id']),
            "cliente_id" => intval($conta["cliente_id"]),
            "banco" => $conta["banco"] ?? "",
            "agencia" => $conta["agencia"] ?? "",
            "conta" => $conta["conta"] ?? "",
            "digito" => ($conta["conta"]) ?? null,
        ]);

        $ultimaConta = App::get('db')->selectWhere(
            'contas_bancarias',
            ["id", $contaId]
        );

        echo json_encode($ultimaConta);
    }
}
