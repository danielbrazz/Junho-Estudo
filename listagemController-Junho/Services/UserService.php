<?php

require_once __DIR__ . '/../Repositories/UserRepository.php'; // Caminho correto

class UserService 
{   
    private $userRepository;

    public function __construct() {
        $this->userRepository = new UserRepository();
    }

    public function useService(){
        return $this->userRepository->getRepository();
    }
}
