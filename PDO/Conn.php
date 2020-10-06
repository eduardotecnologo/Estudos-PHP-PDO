<?php
class Conn implements IConn{
  private $host;
  private $dbname;
  private $username;
  private $password;

  public function __construct($host,$dbname, $username, $password)
  {
    $this->host = $host;
    $this->dbname = $dbname;
    $this->username = $username;
    $this->password = $password;
  }
  public function connect(){
    try {
      // create a PostgreSQL database connection
      $db = new \PDO("pgsql:host={$this->host};port=5432;dbname={$this->dbname};user={$this->username};password={$this->password}");
      // display a message if connected to the PostgreSQL successfully
      if ($db) {
        echo  "Connected to the <strong> database</strong> successfully!";
      }
    } catch (PDOException $e) {
      // Report error message
      echo "Error! Message:" . $e->getMessage() . " Code:" . $e->getCode();
      exit;
    }
  }
}