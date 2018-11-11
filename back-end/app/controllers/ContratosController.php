<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\Contrato;

class ContratosController
{
    public function index($limite = null)
    {
        $limite = null;
        $contratos = App::get('db')
            ->selectTo("contratos", Contrato::class, null, $limite);
        foreach ($contratos as &$contrato) {
            $contrato->vendedor = $contrato->vendedor();
            $contrato->comprador = $contrato->comprador();
            $contrato->produto = $contrato->produto();
        }
        echo json_encode($contratos);
    }

    public function find($contrato)
    {
        $contrato = Contrato::find(["id", $contrato]);
        $contrato->vendedor = $contrato->vendedor();
        $contrato->comprador = $contrato->comprador();
        $contrato->produto = $contrato->produto();

        echo json_encode($contrato);
    }

    public function cadastrar($contrato)
    {
        try {
            $contratoId = App::get('db')->insert('contratos', [
                'codigo' => $contrato['codigo'],
                'comprador_id' => $contrato['comprador_id'],
                'assinatura_comprador' => $contrato['assinatura_comprador'],
                'vendedor_id' => $contrato['vendedor_id'],
                'assinatura_vendedor' => $contrato['assinatura_vendedor'],
                'produto_id' => $contrato['produto_id'],
                'unidade_medida_id' => $contrato['unidade_medida_id'],
                'safra' => $contrato['safra'],
                'quantidade' => $contrato['quantidade'],
                'observacao' => $contrato['observacao'],
                'valor' => $contrato['valor'] ?? 0.0,
            ]);

            $ultimoContrato = App::get('db')->selectWhere(
                'contratos',
                ["id", $contratoId]
            );

            echo json_encode($ultimoContrato);

        } catch (\Exception $exception) {
            echo json_encode($exception);
        }
    }

    public function update($contrato)
    {
        try {
            $contratoId = App::get('db')->update('contratos', [
                'codigo' => $contrato['codigo'],
                'comprador_id' => $contrato['comprador_id'],
                'assinatura_comprador' => $contrato['assinatura_comprador'],
                'vendedor_id' => $contrato['vendedor_id'],
                'assinatura_vendedor' => $contrato['assinatura_vendedor'],
                'produto_id' => $contrato['produto_id'],
                'unidade_medida_id' => $contrato['unidade_medida_id'],
                'safra' => $contrato['safra'],
                'quantidade' => $contrato['quantidade'],
                'observacao' => $contrato['observacao'],
            ],
                ["id", $contrato['contrato']]);

            $contrato = App::get('db')->selectWhere(
                'contratos',
                ["id", $contratoId]
            )[0];

            echo json_encode($contrato);

        } catch (\Exception $exception) {
            echo json_encode($exception);
        }
    }
}
