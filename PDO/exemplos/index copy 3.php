<?php
require_once 'dbconfig.php';

try{
  // create a PostgreSQL database connection
  $conn = new \PDO("pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password") ;
  $query = "select * from products where id={$_GET['id']}"; //sqlinjection
  foreach($conn->query($query) as $products){
    echo $products['id'];
    echo "<br/>";
    echo $products['name'];
    echo "<br/>";
    echo $products['desc'];
    echo "<br/>";
    // http://localhost:8000/index.php?id=1
  }

  // display a message if connected to the PostgreSQL successfully
  if($conn){
    echo  "Connected to the <strong> database</strong> successfully!";
  }
}catch(PDOException $e){
    // Report error message
    echo "Error! Message:".$e->getMessage()." Code:".$e->getCode();
}