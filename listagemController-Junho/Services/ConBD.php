<?php

class Connection {
  private  $servername = "localhost";
  private  $username = "root";           // Padrão no XAMPP
  private  $password = "";               // Normalmente em branco
  private  $dbname = "controllerlist";   // Seu banco
  private $conn;

  public function connectionMSQL(){
   $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
   

    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }
     $this->conn->set_charset("utf8mb4");

    return $this->conn;
  }
}


?>
