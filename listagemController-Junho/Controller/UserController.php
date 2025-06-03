
<?php

require_once __DIR__.'/../Services/UserService.php';

class UserController
{
    private $userServices;

    public function index() {
        $this->userServices = new UserService();
        return $this->userServices->useService();
    }
}

$controller = new UserController();
die(json_encode($controller->index()));

