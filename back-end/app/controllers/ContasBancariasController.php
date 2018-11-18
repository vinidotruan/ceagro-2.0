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

    public function show($clienteId)
    {
        $contas = ContaBancaria::get(["cliente_id", "=", $clienteId]);
        echo json_encode($contas);
    }

    public function cadastrar($conta)
    {
        $contaId = App::get('db')->insert('contas_bancarias', [
            "cliente_id" => intval($conta["cliente_id"]),
            "banco" => $conta["banco"] ?? "",
            "agencia" => $conta["agencia"] ?? "",
            "conta" => $conta["conta"] ?? "",
        ]);

        $ultimaConta = ContaBancaria::find(["cliente_id", $conta['cliente_id']]);

        echo json_encode($ultimaConta);
    }
}
