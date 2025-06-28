<?php
include_once '../Model/Login.php';




class FormLogin{
    private $userLogin;
    public function __construct() {
        $this->userLogin = new LoginUser();
    }

    public function AcessLogin(){        

        $this->userLogin->set_user(filter_input(INPUT_POST,'username', FILTER_SANITIZE_STRING));
        $this->userLogin->set_pass(filter_input(INPUT_POST,'password', FILTER_SANITIZE_STRING));
        
		$user = $this->userLogin->get_user();
        $pass = $this->userLogin->get_pass();
 
        $this->userLogin->ValidaLogin($user,$pass);        
    }
}

// Execução real
$form = new FormLogin();
$form->acessLogin();

