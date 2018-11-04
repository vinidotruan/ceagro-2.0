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

    public function find($dados)
    {
        $contrato = Contrato::find(["id", $dados['id']]);
        $contrato->vendedor = $contrato->vendedor();
        $contrato->comprador = $contrato->comprador();
        $contrato->produto = $contrato->produto();

        echo json_encode($contrato);
    }

    public function cadastrar()
    {
        try {
            $contratoId = App::get('db')->insert('contratos', [
                'numero' => $_POST['numero'],
                'cliente_comprador_id' => $_POST['cliente_comprador_id'],
                'assinatura_comprador' => $_POST['assinatura_comprador'],
                'responsavel_comprador' => $_POST['responsavel_comprador'],
                'cliente_vendedor_id' => $_POST['cliente_vendedor_id'],
                'assinatura_vendedor' => $_POST['assinatura_vendedor'],
                'responsavel_vendedor' => $_POST['responsavel_vendedor'],
                'produto_id' => $_POST['produto_id'],
                'unidade_medida' => $_POST['unidade_medida'],
                'safra' => $_POST['safra'],
                'quantidade' => $_POST['quantidade'],
                'descricao' => $_POST['descricao'],
            ]);

            $contrato = App::get('db')->selectWhere(
                'contratos',
                ["id", $contratoId]
            );

            echo json_encode($contrato);

        } catch (\Exception $exception) {
            echo json_encode($exception);
        }
    }

    public function update($dados)
    {
        try {
            $contratoId = App::get('db')->update('contratos', [
                'numero' => $dados['numero'],
                'cliente_comprador_id' => $dados['cliente_comprador_id'],
                'assinatura_comprador' => $dados['assinatura_comprador'],
                'responsavel_comprador' => $dados['responsavel_comprador'],
                'cliente_vendedor_id' => $dados['cliente_vendedor_id'],
                'assinatura_vendedor' => $dados['assinatura_vendedor'],
                'responsavel_vendedor' => $dados['responsavel_vendedor'],
                'produto_id' => $dados['produto_id'],
                'unidade_medida' => $dados['unidade_medida'],
                'safra' => $dados['safra'],
                'quantidade' => $dados['quantidade'],
                'descricao' => $dados['descricao'],
            ],
                ["id", $dados['id']]);

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
