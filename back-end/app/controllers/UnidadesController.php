<?php

namespace App\Controllers;

use App\Models\Unidade;

class UnidadesController extends Controller {

    public function index($clienteId = null)
    {
        if($clienteId) {

            $unidades = Unidade::get(['cliente_id', $clienteId]);
        } else {
            $unidades = Unidade::get();
        }
        return $this->responderJSON($unidades);
    }

    public function show($id) 
    {
        $unidade = Unidade::get(["id", $id]);
        return $this->responderJSON($unidade);
    }

    public function store($unidade)
    {
        Unidade::store($unidade);
        $unidade = Unidade::find(['cliente_id', $unidade['cliente_id']]);
        return $this->responderJSON($unidade);
    }

    public function update($unidade)
    {
        $unidadeId = $unidade['unidade'];
        unset($unidade['unidade']);

        $unidadeId = Unidade::update(
            $unidade,
            ["id", $unidadeId]
        );

        $unidade = Unidade::find(["cliente_id", $unidade['cliente_id']]);

        echo json_encode($unidade);
    }
}