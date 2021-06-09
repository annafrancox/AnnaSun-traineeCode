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
        $statement = $this->pdo->prepare("select * from {$table}") ;

        $statement->execute(); 
       
       
        return $statement->fetchAll(PDO::FETCH_CLASS);
      
    }

    public function insert($table, $parameters)
    {
      
         
    }
    public function edit()
    {
      
         
    }
    public function delete($table)
    {
      
         
    }
    public function read()
    {
      
         
    }
}
