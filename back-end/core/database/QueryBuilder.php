<?php

namespace App\Core\Database;

use \PDO;

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($tabela, $classe)
    {
        $statement = $this->pdo->prepare("select * from {$tabela}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $classe);
    }

    public function selectWhere($tabela, $classe, $campos)
    {
        try {
            $campos = implode(' = ', $campos);
            $statement = $this->pdo->prepare("select * from {$tabela} where {$campos}");
            $statement->execute();
            return $statement->fetchObject($classe);
        } catch (PDOException $exception) {
            die($e->getMessage());
        }
    }

    public function insert($tabela, $dados)
    {
        $sql = sprintf(
            "INSERT INTO %s(%s) values(%s)",
            $tabela,
            implode(', ', array_keys($dados)),
            ':' . implode(', :', array_keys($dados))
        );
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($dados);
            return $this->pdo->lastInsertId();

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
