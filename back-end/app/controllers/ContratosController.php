<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\Contrato;
use App\Models\Adendo;

class ContratosController extends Controller
{
    public function index()
    {
        $contratos = Contrato::get();
        
        return $this->responderJSON($contratos);
    }

    public function show($contrato)
    {
        $contrato = Contrato::find(["id", $contrato]);
        return $this->responderJSON($contrato);
    }

    public function store($contrato)
    {
        try {
            $contratoId = Contrato::store($contrato);

            $ultimoContrato = Contrato::find(["id", $contratoId]);

            return $this->responderJSON($ultimoContrato);

        } catch (\Exception $exception) {
            return $this->responderJSON($exception);
        }
    }

    public function update($contrato)
    {

        try {
            $contratoId = $contrato['contrato'];
            unset($contrato['contrato']);

            $contrato = Contrato::update(
                $contrato,
                ["id", $contratoId]
            );
            
            $contrato = Contrato::find(["id", $contratoId]);

            return $this->responderJSON($contrato);

        } catch (\Exception $exception) {
            return $this->responderJSON($exception);
        }
    }

    public function adicionarAdendos($adendo)
    {
        try {
            $adendoId = App::get('db')->insert('adendos', [
                'descricao' => $adendo['descricao'],
                'contrato_id' => $adendo['contrato_id']
            ]);

            $adendos = Adendo::get(["contrato_id", $adendo['contrato_id']]);

            return $this->responderJSON($adendos);
        } catch (\Exception $e) {
            die($e);
        }
    }

    public function removerAdendo($contratoId, $adendo)
    {
        try {
            $mensagem = Adendo::delete(["id", $adendo]);

            $adendos = Adendo::get(['contrato_id', $contratoId]);
            return $this->responderJSON($adendos);
        } catch (\Exception $e) {
            die($e);
        }
    }
}
