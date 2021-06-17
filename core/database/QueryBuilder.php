<?php

namespace App\Core\Database;

use PDO;
use Exception;


class QueryBuilder
{

    protected $pdo;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    public function selectAll($tabela)
    {
        $sql = "select * from {$tabela}";

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function selectOne($id, $tabela)
    {
        $sql = "select * from {$tabela} where id = {$id}";

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function insert($tabela, $params)
    {
        $sql = sprintf("INSERT INTO %s (%s) VALUES (%s)", $tabela, implode(', ', array_keys($params)), ':' .  implode(', :', array_keys($params)));
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function edit()
    {
    }
    public function delete($id, $tabela)
    {
        $sql = "delete from {$tabela} where id = {$id}";

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function read()
    {
    }
}
