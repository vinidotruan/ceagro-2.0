<?php
<<<<<<< HEAD
$producao = false;
=======
// $producao = true;
$producao = 0;
>>>>>>> 8f03f74b1f6eda3944bf564afe85b10aee751a87
if (!$producao) {
    return [
        'database' => [
            'connection' => "mysql:host=127.0.0.1",
            'dbname' => "ceagro",
            'charset' => "utf8",
            'username' => "root",
            'password' => "",
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
    'rotas' => 'back-end/'
];
