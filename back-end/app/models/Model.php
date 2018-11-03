<?php

namespace App\Models;

use App\Core\App;

class Model
{

    public static function find($campos = ["id", 0])
    {
        return App::get('db')->find(static::$table, $campos, static::class)[0];
    }
}
