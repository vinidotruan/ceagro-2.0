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
        
        echo json_encode($contratos);
    }

    public function show($contrato)
    {
        $contrato = Contrato::find(["id", $contrato]);
        return $this->responderJSON($contrato);
    }

    public function store($contrato)
    {
        try {
            $contratoId = Contrato::create($contrato);

            $ultimoContrato = Contrato::find(["id", $contratoId]);

            return $this->responderJSON($ultimoContrato);

        } catch (\Exception $exception) {
            echo json_encode($exception);
        }
    }

    public function update($contrato)
    {

        try {
            $contratoId = $contrato['contrato'];
            unset($contrato['contrato']);

            $contrato = Contrato::update(
                $contrato,
                ["id", $contrato]
            );

            
            $contrato = Contrato::find(["id", $contratoId]);

            return $this->responderJSON($contrato);

        } catch (\Exception $exception) {
            echo json_encode($exception);
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

            echo json_encode($adendos);
        } catch (\Exception $e) {
            die($e);
        }
    }

    public function removerAdendo($contratoId, $adendo)
    {
        try {
            $mensagem = Adendo::delete(["id", $adendo]);

            $adendos = Adendo::get(['contrato_id', $contratoId]);
            echo json_encode($adendos);
        } catch (\Exception $e) {
            die($e);
        }
    }
}
