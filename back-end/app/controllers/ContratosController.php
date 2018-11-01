<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\Contrato;

class ContratosController
{
    public function index()
    {
        $contratos = App::get('db')->selectAll("contratos", Contrato::class);
        foreach ($contratos as $contrato) {
            $contrato->vendedor = $contrato->vendedor();
            $contrato->comprador = $contrato->comprador();
            $contrato->produto = $contrato->produto();
        }
        echo json_encode($contratos);
    }

    public function cadastrar()
    {
        try {
            $contrato = App::get('db')->insert('contratos', [
                'numero' => $_POST['numero_confirmacao'],
                'cliente_comprador_id' => $_POST['cliente_comprador_id'],
                'cliente_vendedor_id' => $_POST['cliente_vendedor_id'],
                'produto_id' => $_POST['produto_id'],
                'unidade_medida' => $_POST['unidade_medida'],
                'safra' => $_POST['safra'],
                'quantidade' => $_POST['quantidade'],
                'descricao' => $_POST['descricao'],
            ]);
            print_r($contrato);

        } catch (\Exception $exception) {
            print_r($exception);
        }

    }
}
