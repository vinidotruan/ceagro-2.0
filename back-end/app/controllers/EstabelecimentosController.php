<?php

namespace App\Controllers;

use App\Models\Estabelecimento;

class EstabelecimentosController extends Controller {

    public function index($cliente = null)
    {
        if($cliente) {
            $estabelecimentos = Estabelecimento::find(['cliente_id', $cliente]);
        } else {
            $estabelecimentos = Estabelecimento::get();
        }
        return $this->responderJSON($estabelecimentos);
    }

    public function show($estabelecimento) 
    {
        $estabelecimento = Estabelecimento::find(["id", $estabelecimento]);
        return $this->responderJSON($estabelecimento);
    }

    public function store($estabelecimento)
    {
        $estabelecimentoId = Estabelecimento::store($estabelecimento);
        $estabelecimento = Estabelecimento::find(["id", $estabelecimentoId]);
        return $this->responderJSON($estabelecimento);
    }
}