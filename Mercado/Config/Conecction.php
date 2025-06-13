<?php

class conecctionDB{
    private $conn;
    private $servername='localhost';
    private $username='root';
    private $password ='';
    private $dbname = "brazmart";

    public  function connection(){
        $dsn="mysql:host={$this->servername};dbname={$this->dbname};charset=utf8mb4";
        try {

            $this->conn = new PDO($dsn, $this->username, $this->password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);

        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
    }
    public function getConnection() {
        return $this->conn;
    }

}
$teste =new conecctionDB;
$teste->connection();
