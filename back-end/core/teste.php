<?php
/**
 *
 * ceagro/back-end/contratos
 * ceagro/back-end/contratos/
 */
namespace App\Core;

class AAAAa
{
    protected $routes = [
        'POST' => [],
        'GET' => [],
    ];

    public static function carregar($arquivo)
    {
        $router = new self;
        require $arquivo;
        return $router;
    }

    public function post($rota, $controller)
    {
        $this->routes['POST'][$rota] = $controller;
    }

    public function get($rota, $controller)
    {
        $this->routes['GET'][$rota] = $controller;
    }

    public function direcionar($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            try {
                return $this->executarAcao(
                    ...explode('@', $this->routes[$requestType][$uri])
                );
            } catch (\Exception $exception) {
                return $exception->getMessage();
            }
        }
        throw new \Exception("URI solicitada não existe.");

    }

    protected function executarAcao($controller, $metodo)
    {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;

        if (!method_exists($controller, $metodo)) {
            throw new \Exception("Método não encontrado.");
        }

        return $controller->$metodo();
    }

}
