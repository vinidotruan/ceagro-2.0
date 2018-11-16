<?php

namespace App\Models;

use App\Core\App;

class Model
{

    public static function get()
    {
        return App::get("db")->selectAll(static::$table, static::class);
    }

    public static function find($campos = ["id", 0])
    {
        return App::get('db')->find(static::$table, $campos, static::class)[0];
    }
}
