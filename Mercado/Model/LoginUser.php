<?php
require '../Config/Conecction.php';

class LoginUser{
    private $user;
    private $pass; 

    public function get_pass(){
        return $this->pass;
    }
    
    public function set_pass($pass){
        $this->pass = $pass;
    }
    
    public function get_user(){
        return $this->user;
    }
    
    public function set_user($user){        
        $this->user = $user;        
    }

    public function ValidaLogin($user,$pass){
       
        $conn= new conecctionDB;
        $conn->connection();
        $pdo = $conn->getConnection(); // Pega o objeto PDO para usar
        $sql = $pdo->prepare("select * from usuario_mercado where email=:email and senha=:senha");
        $sql->execute(['email' => $user,'senha' =>$pass]);
        $RD = $sql->fetch(PDO::FETCH_ASSOC);
        return $RD;

    }
}