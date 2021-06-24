<?php

namespace App\Core\Database;

use Exception;
use PDO;

class QueryBuilder
{

    protected $pdo;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    public function selectAll($table)
    {

        $sql = "SELECT * FROM {$table}";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function insert($table, $parametros)
    {

<<<<<<< HEAD
        $sql = sprintf('INSERT into %s (%s) VALUES (%s)', 
        $table, 
        implode(', ', array_keys($parametros)),
        ':' . implode(', :', array_keys($parametros))

        );
=======
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parametros)),
            ':' . implode(', :', array_keys($parametros))

        );

>>>>>>> 3189c9fcf605218a53e0acbcda758c2a47901dc1

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parametros);
        } catch (Exception $e) {
            die($e->getMessage());
        }


    }


    public function edit($table, $parametros)
    {


        $sql = "UPDATE {$table} SET ";

        foreach ($parametros as $key => $parametro) {
            $sql = $sql . "{$key} = '{$parametro}',";
        }

        $sql = rtrim($sql, " " . ",");
        $sql = $sql . " WHERE id = {$parametros['id']}";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function delete($table, $id)
    {

        $sql = "DELETE FROM `{$table}` WHERE id = {$id}";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function read($table, $parameter)
    {

        $sql = "SELECT * FROM {$table} WHERE id = {$parameter}";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

<<<<<<< HEAD


    public function readCat($table, $field, $parameter)
    {

        $sql = "SELECT * FROM `{$table}` WHERE `{$field}` = {$parameter}";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }

=======
    public function search($table, $searchq)
    {
        $sql = "SELECT * from {$table} WHERE nome LIKE '%{$searchq}%'";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
>>>>>>> 3189c9fcf605218a53e0acbcda758c2a47901dc1
    }
}
