<?php

class dbConnection {
  private $dbusername = 'root';
  private $dbpassword = 'root';
  private $dbhost = 'localhost';
  private $dbname = 'result';
  //protected $dsn = 'mysql:host='.$dbhost.';dbname='.$dbname;
  //protected $dsn = "mysql:host=$dbhost;dbname=$dbname";
  // private   $dsn = "mysql:host=$dbhost;dbname=$dbname";
  protected $conn;

  public function connect(){
    //$conn = new PDO($dsn, $dbusername, $dbpassword);
    try {

      $this->conn = new PDO('mysql:host=localhost;dbname=result', $this->dbusername, $this->dbpassword);
      //$this->conn->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );
      //$this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      // set the PDO error mode to exception
      //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //echo "Connected successfully";
      return $this->conn;
    }
    catch(PDOException $e){
      echo "Connection failed: " . $e->getMessage();
    }
    return $this->conn;
  }
}




?>
