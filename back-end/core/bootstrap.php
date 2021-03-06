<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use App\Core\App;
use App\Core\Database\Conexao;
use App\Core\Database\QueryBuilder;

App::bind('config', require 'config.php');

App::bind('db', new QueryBuilder(
    Conexao::iniciar(App::get('config')['database'])
));
