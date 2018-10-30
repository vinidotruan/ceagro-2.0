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

    public function selectWhere($tabela, $campos)
    {
        try {
            $campos = implode(' = ', $campos);
            $statement = $this->pdo->prepare("select * from {$tabela} where {$campos}");
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
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

            if (!$statement->execute($dados)) {
                throw new \Exception('Erro ao inserir');
            }
            return $this->pdo->lastInsertId();

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function update($tabela, $dados, $where = null)
    {
        $sql = sprintf(
            "UPDATE %s SET %s WHERE %s",
            $tabela,
            ":" . implode("=:", array_key($dados)),
            implode("=", array_key($where))
        );

        dd($sql);
        try {
            $statement = $this->pdo->prepare($sql);

        } catch (\PDOException $e) {}

    }
}
