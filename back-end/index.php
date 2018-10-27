<?php
require "vendor/autoload.php";
require "core/helpers.php";
require "core/bootstrap.php";

use App\Core\Request;
use App\Core\Router;

dd($_SERVER);

try {
    Router::carregar('app/routes.php')->direcionar(
        dd(Request::uri()),
        Request::method()
    );
} catch (\Exception $e) {
    echo $e->getMessage();
}
