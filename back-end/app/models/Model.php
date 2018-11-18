<?php

namespace App\Models;

use App\Core\App;

class Model
{

    public static function get($where = null)
    {
        return App::get("db")->selectAll(static::$table, static::class, $where);
    }

    public static function find($campos = ["id", 0])
    {
        $response = App::get('db')->find(static::$table, $campos, static::class);
        return $a = array_shift($response);
    }
}
