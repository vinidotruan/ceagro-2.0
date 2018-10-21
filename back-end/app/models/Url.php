<?php

namespace App\Models;

use App\Core\App;

class Url
{
    private $imagens;
    private $importacao;

    public function __get($name)
    {
        return $this->$name = App::get('config')['urls']["{$name}"];
    }
}
