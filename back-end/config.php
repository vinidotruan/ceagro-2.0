<?php
<<<<<<< HEAD
$producao = true;
=======
// $producao = true;
$producao = 0;
>>>>>>> c31a5b391694c06087faf70c2a62852bb01e4a3b
if (!$producao) {
    return [
        'database' => [
            'connection' => "mysql:host=127.0.0.1",
            'dbname' => "ceagro",
            'charset' => "utf8",
            'username' => "root",
            'password' => "root",
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ],
        ],
        'rotas' => 'ceagro/back-end/'
    ];
}

return [
    'database' => [
        'connection' => "mysql:host=mysql.ceagro.com.br",
        'dbname' => "ceagro01",
        'charset' => "utf8",
        'username' => "ceagro01",
        'password' => "saopio18",
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ],
    ],
<<<<<<< HEAD
    'rotas' => 'back-end'
=======
    'rotas' => 'back-end/'
>>>>>>> c31a5b391694c06087faf70c2a62852bb01e4a3b
];
