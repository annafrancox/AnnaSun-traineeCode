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

        $sql = "SELECT COUNT(*) FROM {$table} ";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchColumn();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function selectAllNoPag($table)
    {

        $sql = "SELECT * FROM {$table} ";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }



    public function selectAllPagination($table, $inicio, $total_reg)
    {

        $sql = "SELECT * FROM {$table} LIMIT {$inicio}, {$total_reg}";

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

        $sql= sprintf('INSERT INTO %s (%s) VALUES (%s)', 
        $table, 
        implode(', ', array_keys($parametros)),
        ':'.implode(', :', array_keys($parametros))
        
    
        );
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parametros);
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


    public function read($table, $id)
    {

        $sql = "SELECT * FROM {$table} WHERE id = {$id}";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    }
