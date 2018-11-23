<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\Contrato;

class ContratosController
{
    public function index($limite = 50)
    {
        $contratos = App::get('db')->selectTo("contratos", Contrato::class, null, $limite);
        echo json_encode($contratos);
    }

    public function show($contrato)
    {
        $contrato = Contrato::find(["id", $contrato]);
        echo json_encode($contrato);
    }

    public function cadastrar($contrato)
    {
        try {
            $contratoId = App::get('db')->insert('contratos', [
                'numero_confirmacao' => $contrato['numero_confirmacao'] ?? "",
                'vendedor_id' => $contrato['vendedor_id'],
                'comprador_id' => $contrato['comprador_id'],
                'produto_id' => $contrato['produto_id'],
                'unidade_medida_id' => $contrato['unidade_medida_id'],
                'safra' => $contrato['safra'] ?? "",
                'quantidade' => $contrato['quantidade'] ?? "",
                'descricao' => $contrato['descricao'] ?? "",
                'preco' => $contrato['preco'] ?? "",
                'tipo_embarque' => $contrato['tipo_embarque'] ?? "",
                'local' => $contrato['local'] ?? "",
                'data_embarque' => $contrato['data_embarque'] ?? "",
                'pagamento_texto' => $contrato['pagamento_texto'] ?? "",
                'peso_qualidade' => $contrato['peso_qualidade'] ?? "",
                'cfop' => $contrato['cfop'] ?? "",
                'valor_contrato' => $contrato['valor_contrato'] ?? "",
                'solicitacao_cotas' => $contrato['solicitacao_cotas'] ?? "",
                'carregamento' => $contrato['carregamento'] ?? "",
                'assinatura_vendedor' => $contrato['assinatura_vendedor'] ?? "",
                'assinatura_comprador' => $contrato['assinatura_comprador'] ?? "",
                'observacao' => $contrato['observacao'] ?? "",
                'comissao' => $contrato['comissao'] ?? "",
                'codigo' => $contrato['codigo'] ?? "",
            ]);

            $ultimoContrato = Contrato::find(["id", $contratoId]);

            echo json_encode($ultimoContrato);

        } catch (\Exception $exception) {
            echo json_encode($exception);
        }
    }

    public function update($contrato)
    {
        try {
            $contratoId = App::get('db')->update(
                'contratos',
                [
                    'numero_confirmacao' => $contrato['numero_confirmacao'] ?? "",
                    'vendedor_id' => $contrato['vendedor_id'],
                    'comprador_id' => $contrato['comprador_id'],
                    'produto_id' => $contrato['produto_id'],
                    'unidade_medida_id' => $contrato['unidade_medida_id'],
                    'safra' => $contrato['safra'] ?? "",
                    'quantidade' => $contrato['quantidade'] ?? "",
                    'descricao' => $contrato['descricao'] ?? "",
                    'preco_texto' => $contrato['preco_texto'] ?? "",
                    'tipo_embarque' => $contrato['tipo_embarque'] ?? "",
                    'local' => $contrato['local'] ?? "",
                    'data_embarque' => $contrato['data_embarque'] ?? "",
                    'peso_qualidade' => $contrato['peso_qualidade'] ?? "",
                    'cfop' => $contrato['cfop'] ?? "",
                    'solicitacao_cotas' => $contrato['solicitacao_cotas'] ?? "",
                    'carregamento' => $contrato['carregamento'] ?? "",
                    'assinatura_vendedor' => $contrato['assinatura_vendedor'] ?? "",
                    'assinatura_comprador' => $contrato['assinatura_comprador'] ?? "",
                    'observacao' => $contrato['observacao'] ?? "",
                    'comissao' => $contrato['comissao'] ?? "",
                ],
                ["id", $contrato['contrato']]
            );

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
