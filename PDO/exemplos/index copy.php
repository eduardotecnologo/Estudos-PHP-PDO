<?php
require_once 'dbconfig.php';

try{
  // create a PostgreSQL database connection
  $conn = new \PDO("pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password") ;
  $query = "select * from products";
  $stmt = $conn->query($query);
  $list = $stmt->fetch(PDO::FETCH_ASSOC);
  // $return = $conn->query($query);
  print_r($list);

  // display a message if connected to the PostgreSQL successfully
  if($conn){
    echo  "Connected to the <strong> database</strong> successfully!";
  }
}catch(PDOException $e){
    // Report error message
    echo "Error! Message:".$e->getMessage()." Code:".$e->getCode();
}