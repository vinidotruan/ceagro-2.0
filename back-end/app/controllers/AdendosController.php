<?php

namespace App\Controllers;

use App\Core\App;

class AdendosController
{

    public function store()
    {
        $adendoId = App::get('db')->insert('adendos', [
            'contrato_id' => $_POST['contrato_id'],
            'definicao' => $_POST['definicao'],
        ]);

        echo json_encode($adendoId);
    }
}
