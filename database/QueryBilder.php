<?php

class QueryBilder
{
    public $pdo;
    
    function __construct() 
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname=new_uzbek_crud", "root", "");
    }
    
    
function all($table)
{
    $sql = "SELECT * FROM $table";
    $statement = $this->pdo->prepare($sql); // подготовить
    $statement->execute(); // выполнить
    $results = $statement->fetchAll(PDO::FETCH_ASSOC); //вывести 

     return $results; 

  }
    
    
    // Сохранение новой задачи
function store($table, $data)
{
    
   $keys = array_keys($data); 
    
    $stringOfKeys = implode( ',' , $keys);
    
    $placeholders = ":" . implode(', :' , $keys);
    
    $sql = "INSERT INTO $table ($stringOfKeys) VALUES ($placeholders)";
    
    
    $statement = $this->pdo->prepare($sql);
    $statement->execute($data);
   
  }
    
    // Вывод одной задачи
function getOne($table, $id)
{
    $sql = "SELECT * FROM $table WHERE id=:id";
    $statement = $this->pdo->prepare($sql); // подготовить
    $statement->bindParam(":id", $id);
    $statement->execute(); // выполнить 
    $result = $statement->fetch(PDO::FETCH_ASSOC);   
    
    return  $result;
}
    
    
    //Изменение (обновление) информации
function update($table, $data)
{
    $fields = '';
    
    foreach($data as $key => $value) {
        
        $fields .= $key . "=:" . $key . ",";
        
    }
    
   $fields = rtrim($fields, ',');
    
    
    $sql = "UPDATE $table SET $fields WHERE id=:id";

    
    $statement = $this->pdo->prepare($sql);
    $statement->execute($data);
}
    
    
    //Удаление задачи 
function delete($table, $id)
{
    $sql = "DELETE FROM $table WHERE id=:id";
    $statement = $this->pdo->prepare($sql);
    $statement->bindParam(":id", $id);
    $statement->execute(); 
    
}
    
}