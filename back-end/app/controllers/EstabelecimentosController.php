<?php

namespace App\Controllers;

use App\Models\Estabelecimento;

class EstabelecimentosController extends Controller {

    public function index($cliente = null)
    {
        if($cliente) {

            $estabelecimentos = Estabelecimento::get(['cliente_id', $cliente]);
        } else {
            $estabelecimentos = Estabelecimento::get();
        }
        return $this->responderJSON($estabelecimentos);
    }

    public function show($estabelecimento) 
    {
        $estabelecimento = Estabelecimento::get(["id", $estabelecimento]);
        return $this->responderJSON($estabelecimento);
    }

    public function store($estabelecimento)
    {
        Estabelecimento::store($estabelecimento);
        $estabelecimento = Estabelecimento::find(['cliente_id', $estabelecimento['cliente_id']]);
        return $this->responderJSON($estabelecimento);
    }
}