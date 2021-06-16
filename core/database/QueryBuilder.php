<?php

namespace App\Core\Database;

use PDO;

class QueryBuilder
{

    protected $pdo;


    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }


    public function selectAll($table)
    {
       
        $sql = "SELECT * FROM {$table}";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
        
    }

    public function insert($table, $parameters)
    {
      $sql = sprintf(
          "INSERT INTO %s (%s) VALUES (%s)",  
          $table,
          implode(', ', array_keys($parameters)),
          ':' .  implode(', :' , array_keys($parameters))
      );

      try{
          $stmt = $this->pdo->prepare($sql);
          $stmt->execute($parameters);
        }catch(\Exception $e)
      {

      }
         
    }
    public function edit($table , $parameters)
    {
        $sql = "UPDATE {$table} SET ";
        foreach($parameters as $key => $parameter)
        {
            $sql = $sql . "{$key} = '{$parameter}', ";
        }
        $sql = rtrim($sql, " " . ",");
        $sql = $sql . " WHERE id = {$parameters['id']}";


        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

        } catch (Exception $e) {
            die($e->getMessage());
        }

    }





    public function delete($table, $id)
    {
      $sql = "DELETE FROM ".  $table . " WHERE id = {$id}";
      $qry = $this->pdo->prepare($sql);
      $qry->execute(); 
         
    }


    public function read($table , $id)
    {
      $sql = "SELECT * FROM {$table} WHERE id = {$id}";
      $stmt = $this->pdo->prepare($sql);
      $stmt -> execute();
      return $stmt ->fetchAll(PDO::FETCH_CLASS);
         
    }
}
