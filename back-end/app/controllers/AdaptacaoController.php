<?php

namespace App\Controllers;

use App\Models\Cliente;
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
}