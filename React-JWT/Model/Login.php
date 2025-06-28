<?php
    require_once '../Config/connection.php';
    require_once '../Config/auth_jwt.php';

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
            
             if (empty($user)) {
                throw new Exception("Usuário não pode estar vazio");
            }else{
                $this->user = $user;
            }
        }

        public function ValidaLogin($login,$pass){
            /*Conexao com banco*/            
            
            $conn= new connectionBD;
            $conn->connection();

            $pdo = $conn->getConnection(); // Pega o objeto PDO para usar

            $sql =$pdo->prepare('SELECT * FROM gfd_usuar where login =:user and senha =:pass');                
            $sql->execute(['user' => $login,'pass' =>$pass]);
            $user = $sql->fetch(PDO::FETCH_ASSOC);

            $payload =[
                "exp" => time()+3600,
                "iat" => time(),
                "email" =>$user['email']
            ];

           
             if ($user) {
                // Retorna o nome do usuário ou qualquer outro dado necessário
                $authJWT = new Auth_jwt;
                $authJWT->authLoginJWT($payload);          
             

                 echo json_encode([
                    'success' => true,
                   
                    'user' => $user['nome']
                ]);

            } else {
                echo json_encode([
                    'success' => false,
                    'message' => 'Usuário ou senha inválidos.'
                ]);
            }

            exit; 

            
        }
    }
  
  

   

