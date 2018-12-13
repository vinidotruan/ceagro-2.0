<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\Cliente;
use App\Models\Contrato;

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

    public function contratosFuturos() {
        $reflection = new \ReflectionClass("App\Models\Contrato");
        $instance = $reflection->newInstanceWithoutConstructor();
        $futuros = $instance->ultimoFuturo();
        return $this->responderJSON($futuros);
    }
    
    public function contratosAtuais() {
        $reflection = new \ReflectionClass("App\Models\Contrato");
        $instance = $reflection->newInstanceWithoutConstructor();
        $atuais = $instance->ultimoAtual();
        return $this->responderJSON($atuais);
    }

    public function numeroConfirmacao()
    {   
        $reflection = new \ReflectionClass("App\Models\Contrato");
        $instance = $reflection->newInstanceWithoutConstructor();

        $data = date('Y');
        $dataFutura = $data+1;

        $futuro = $instance->ultimoFuturo()."/".$dataFutura;
        $atual = $instance->ultimoAtual()."/".$data;

        return $this->responderJSON([$atual, $futuro]);
    }

    public function dados()
    {
        $contratos = Contrato::get();
        $clientesIds;

        foreach ($contratos as $contrato) {
            $clientesIds[] = $contrato->comprador_id;
        }

        $num = count($clientesIds);

        $a = array_map(
            function($val) use ($num){
                return array('count'=>$val,'avg'=>round($val/$num*100, 1));
            },
        array_count_values($clientesIds)
        );

        foreach ($a as $k => &$b) {
            $val = Cliente::find(['id',$k]);
            $b['cliente'] =  ($val->razao_social)? $val->razao_social : $val->cnpj;
        }
        return $this->responderJSON($a);
    }

}
