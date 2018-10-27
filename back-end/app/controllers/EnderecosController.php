<?php

namespace App\Controllers;

class EnderecosController
{
    public function index()
    {
        $endereco = App::get('db')->selectWhere("enderecos", Endereco::class);
        echo json_encode($endereco);
    }

    public function cadastrar()
    {
        $endereco = App::get('db')->inser('enderecos', [
            ''
        ]);
    }
}
