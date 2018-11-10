<?php

namespace App\Controllers\Adaptacao;

// use App\Models\{Cliente, EnderecoEntrega, EnderecoFaturamento};
// use App\Controllers\ClientesController;

use App\Controllers\AdendosController;
use App\Controllers\ClientesController;
use App\Controllers\ContasBancariasController;
use App\Controllers\EnderecosController;
use App\Controllers\ProdutosController;
use App\Core\App;
use App\Models\Adaptacao\Cliente as ClientesOld;
use App\Models\Adaptacao\ClienteContaBacaria as ClienteContaBancariaOld;
use App\Models\Adaptacao\Contrato as ContratoOld;
use App\Models\Adaptacao\Produto as ProdutosOld;

class AdaptacaoController
{
    public function adaptarClientes()
    {
        $clientesOld = App::get('db')->selectAll("cliente", ClientesOld::class);

        foreach ($clientesOld as $clienteOld) {
            $cliente = (new ClientesController)->cadastrar([
                "id" => $clienteOld->id_cliente,
                "razao_social" => $clienteOld->razao_social,
                "cnpj" => $clienteOld->cnpj,
                "inscricao_estadual" => $clienteOld->inscricao_estadual,
                "email" => $clienteOld->email,
                "atuacao" => $this->verificarAtuacao($clienteOld->id_tipo_cliente),
            ]);

            $this->adaptarEnderecoEntrega($clienteOld);
            $this->adaptarEnderecoFaturamento($clienteOld);

        }
        $this->adaptarProdutos();
        $this->adaptarContasBancarias();

        echo "TUDO OKA";
    }

    public function adaptarAdendos()
    {
        $contratosOld = App::get('db')->selectAll("contrato", ContratoOld::class);

        foreach ($contratosOld as $contrato) {
            if ($contrato->clausula_1_comprador) {
                (new AdendosController)->cadastrar([
                    "contrato_id" => $contrato->id,
                    "definicao" => $contrato->clausula_1_comprador,
                ]);

            }
            if ($contrato->clausula_2_comprador) {
                (new AdendosController)->cadastrar([
                    "contrato_id" => $contrato->id,
                    "definicao" => $contrato->clausula_2_comprador,
                ]);

            }
            if ($contrato->clausula_3_comprador) {
                (new AdendosController)->cadastrar([
                    "contrato_id" => $contrato->id,
                    "definicao" => $contrato->clausula_3_comprador,
                ]);

            }
            if ($contrato->clausula_1_vendedor) {
                (new AdendosController)->cadastrar([
                    "contrato_id" => $contrato->id,
                    "definicao" => $contrato->clausula_1_vendedor,
                ]);

            }
            if ($contrato->clausula_2_vendedor) {
                (new AdendosController)->cadastrar([
                    "contrato_id" => $contrato->id,
                    "definicao" => $contrato->clausula_2_vendedor,
                ]);

            }
            if ($contrato->clausula_3_vendedor) {
                (new AdendosController)->cadastrar([
                    "contrato_id" => $contrato->id,
                    "definicao" => $contrato->clausula_3_vendedor,
                ]);
            }
        }
    }

    public function adaptarContasBancarias()
    {
        $contasOld = App::get('db')->selectAll("cliente_conta_bancaria", ClienteContaBancariaOld::class);
        foreach ($contasOld as $contaOld) {
            (new ContasBancariasController)->cadastrar([
                "id" => $contaOld->id_cliente_conta_bancaria,
                "cliente_id" => $contaOld->id_cliente,
                "banco" => $contaOld->banco,
                "agencia" => $contaOld->agencia,
                "conta" => $contaOld->conta,
            ]);
        }
    }

    private function adaptarProdutos()
    {
        $produtosOld = App::get('db')->selectAll("produto", ProdutosOld::class);

        foreach ($produtosOld as $produtoOld) {
            $produto = (new ProdutosController)->cadastrar([
                "tipo_id" => $produtoOld->id_categoria,
                "codigo" => $produtoOld->codigo,
                "nome" => $produtoOld->titulo,
            ]);
        }
    }

    private function adaptarEnderecoFaturamento($clienteOld)
    {
        $enderecoEntrega = (new EnderecosController)->cadastrarEnderecoFaturamento([
            'cliente_id' => $clienteOld->id_cliente,
            'cep' => $clienteOld->cep,
            'complemento' => $clienteOld->complemento,
            'bairro' => $clienteOld->bairro,
            'cidade' => $clienteOld->cidade,
            'numero' => $clienteOld->numero,
            'estado' => $clienteOld->estado,
            'rua' => $clienteOld->endereco,
        ]);
    }

    private function adaptarEnderecoEntrega($clienteOld)
    {
        $enderecoEntrega = (new EnderecosController)->cadastrarEnderecoEntrega([
            'cliente_id' => $clienteOld->id_cliente,
            'cep' => $clienteOld->cep_entrega,
            'complemento' => $clienteOld->complemento_entrega,
            'bairro' => $clienteOld->bairro_entrega,
            'cidade' => $clienteOld->cidade_entrega,
            'numero' => $clienteOld->numero_entrega,
            'estado' => $clienteOld->estado_entrega,
            'rua' => $clienteOld->endereco_entrega,
        ]);
    }

    private function verificarAtuacao($atuacao)
    {
        if ($atuacao == "1") {
            return "comprador";
        }

        if ($atuacao == "2") {
            return "vendedor";
        }

        return "ambos";
    }
}
