<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\Endereco;
use App\Models\Cliente;

class EnderecosController
{
    public function index($cliente)
    {
        if ($cliente) {
            $endereco = Endereco::find(["cliente_id", $cliente]);
        } else {
            $endereco = Endereco::get();
        }
        echo json_encode($endereco);
    }
    public function store($endereco)
    {
        $enderecoId = Endereco::store($endereco);
        $endereco = Endereco::find(["id", $enderecoId]);
        echo json_encode($endereco);

    }

    public function update($endereco)
    {
        $enderecoId= $endereco['id'];
        unset($endereco['endereco']);
        $enderecoId = Endereco::update($endereco,["id", $enderecoId]);

        $endereco = endereco::find(["id", $enderecoId]);
        echo json_encode($endereco);

    }
}
