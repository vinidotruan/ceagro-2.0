<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\Banco;
use App\Models\Cliente;

class ClientesController extends Controller {
    public function index()
    {
        $clientes = Cliente::get(["razao_social", "!=", "' '"]);
        echo json_encode($clientes);
    }

    public function show($id)
    {
        $cliente = Cliente::find(["id", $id]);
        echo json_encode($cliente);
    }

    public function store($cliente)
    {
        $clienteId = Cliente::store($cliente);

        $cliente = Cliente::find(["id", $clienteId]);

        return $this->responderJSON($cliente);
    }

    public function update($cliente)
    {
        $clienteId = $cliente['cliente'];
        unset($cliente['cliente']);
        $clienteId = Cliente::update(
            $cliente,
            ["id", $clienteId]
        );

        $cliente = Cliente::find(["id", $clienteId]);

        echo json_encode($cliente);
    }
}
