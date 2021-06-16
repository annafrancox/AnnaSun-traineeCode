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
    public function edit($table, $id)
    {
      $sql = "UPDATE {$table} SET";
         
    }
    public function delete($table, $id)
    {
      $sql = "DELETE FROM ".  $table . " WHERE id = {$id}";
      $qry = $this->pdo->prepare($sql);
      $qry->execute(); 
         
    }
    public function read($table , $id)
    {
      $sql = "SELECT `id`, `nome`, `email`, `senha`, `foto` FROM {$table} WHERE id = {$id}";
      $stmt = $this->pdo->prepare($sql);
      $stmt -> execute();
      return $stmt ->fetchAll(PDO::FETCH_CLASS);
         
    }
}
