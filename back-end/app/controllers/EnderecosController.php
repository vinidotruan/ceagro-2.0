<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\Endereco;
use App\Models\Cliente;

class EnderecosController extends Controller
{
    public function index($clienteId = null)
    {
        if ($clienteId) {
            $endereco = Endereco::get(["cliente_id", '=', $clienteId]);
        } else {
            $endereco = Endereco::get();
        }

        return $this->responderJSON($endereco);
    }

    public function store($endereco)
    {
        $enderecoId = Endereco::store($endereco);
        $endereco = Endereco::find(["id", $enderecoId]);
        echo json_encode($endereco);

    }

    public function update($endereco)
    {
        $enderecoId = $endereco['id'];
        unset($endereco['endereco']);
        $enderecoId = Endereco::update($endereco, ["id", $enderecoId]);

        $endereco = endereco::find(["id", $enderecoId]);
        echo json_encode($endereco);

    }
}
