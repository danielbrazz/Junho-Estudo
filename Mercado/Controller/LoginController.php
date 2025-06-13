<?php
require '../Model/LoginUser.php';
class LoginController{
    private $userLogin;
    public function __construct() {
        $this->userLogin = new LoginUser();
    }

    public function AcessLogin(){        

        $this->userLogin->set_user(filter_input(INPUT_POST,'email', FILTER_SANITIZE_STRING));
        $this->userLogin->set_pass(filter_input(INPUT_POST,'password', FILTER_SANITIZE_STRING));
        
        $user = $this->userLogin->get_user();
        $pass = $this->userLogin->get_pass();

        $dados = $this->userLogin->ValidaLogin($user, $pass);

        if ($dados) {
            echo json_encode(['status' => 'ok', 'dados' => $dados]);
        } else {
            echo json_encode(['status' => 'erro', 'mensagem' => 'Login inválido']);
        }
        
    }    
}
// Execução real
$form = new LoginController();
$form->acessLogin();