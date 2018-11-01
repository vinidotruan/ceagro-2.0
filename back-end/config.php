<?php
$producao = true;
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
    ];
}
return [
    'database' => [
        'connection' => "mysql:host=sistemaceagro.mysql.dbaas.com.br",
        'dbname' => "sistemaceagro",
        'charset' => "utf8",
        'username' => "sistemaceagro",
        'password' => "tVSCV6KiC4izpv",
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ],
    ],
];
