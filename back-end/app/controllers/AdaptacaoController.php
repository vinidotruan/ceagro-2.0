<?php

namespace App\Controllers;

use App\Models\Cliente;
use App\Models\Endereco;
use App\Models\Unidade;

class AdaptacaoController extends Controller
{

    public function index()
    {
        $clientes = Cliente::get();
        $id = [];

        foreach ($clientes as $cliente) {
            $unidade1 = (array) $cliente;
            unset($unidade1['id']);

            foreach ($clientes as $cliente2) {
                
                if($cliente->razao_social == $cliente2->razao_social 
                && $cliente->cnpj != $cliente2->cnpj
                && $cliente->inscricao_estadual != $cliente2->inscricao_estadual
                && $cliente->id != $cliente2->id
                ) {
                    $unidade1['cliente_id'] = $cliente->id;
                    $ids[$cliente->id][] = $cliente2->id;
                }
            }
            $unidade1['cliente_id'] = $cliente->id;
            $unidade = Unidade::store($unidade1);
            $endereco = (array)Endereco::find(["cliente_id", $unidade1['cliente_id']]);
            if($endereco) {
                $endereco['unidade_id'] = $unidade;
                Endereco::update($endereco, ["id", $endereco['id']]);
            }
        }

        $unidades = Unidade::get();

        foreach ($unidades as $key => $unidade) {
            foreach ($unidades as $key => $unidade2) {
                if($unidade->razao_social == $unidade2->razao_social && $unidade->inscricao_estadual != $unidade2->inscricao_estadual && $unidade->cliente_id != $unidade2->cliente_id) {
                    $unidade2->cliente_id = $unidade->cliente_id;
                    Unidade::update($unidade2, ["id", $unidade2->id]);
                }
            }
        }
    }

    public function enderecos()
    {
        $clientes = Cliente::get();

        foreach ($clientes as $key => $cliente) {
            if($cliente->endereco) {
                $endereco = Endereco::find(["id", $cliente->endereco->id]);
                // Endereco::update();
                dd(count($cliente->unidades));
            }
        }
        return $enderecos;
    }
}