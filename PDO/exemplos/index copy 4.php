<?php
require_once 'dbconfig.php';

try{
  // create a PostgreSQL database connection
  $conn = new \PDO("pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password") ;

  // Protegendo sqlinjection
  $query = "select * from products where id=:id";
  $stmt = $conn->prepare($query);
  $stmt->bindValue(':id',$_GET['id']);
  $stmt->execute();

  print_r($stmt->fetchAll());

  // display a message if connected to the PostgreSQL successfully
  if($conn){
    echo  "Connected to the <strong> database</strong> successfully!";
  }
}catch(PDOException $e){
    // Report error message
    echo "Error! Message:".$e->getMessage()." Code:".$e->getCode();
}