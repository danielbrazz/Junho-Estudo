<?php
    require '../Config/vendor/autoload.php';
    use Firebase\JWT\JWT;
    use Firebase\JWT\Key;
    $dotenv = Dotenv\Dotenv::createImmutable(dirname(__FILE__,1));
    $dotenv->load();
Class Auth_jwt{
    private $encode;
    private $decode;

    public function authLoginJWT($payload){
      // var_dump(($payload));
        $this->encode =JWT::encode($payload,$_ENV['KEY'],'HS256');

        

        return json_encode($this->encode);
    }

    /*public function authValid($token) {
        try {
           $decoded = JWT::decode($token, new Key($_ENV['KEY'], 'HS256'));
            return [
                'success' => true,
                'data' => $decoded
            ];
        } catch (Exception $e) {
            return [
                'success' => false,
                'message' => 'Token inválido ou expirado'
            ];
        }
    }*/
   
}