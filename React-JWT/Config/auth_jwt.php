<?php
header("Access-Control-Allow-Origin: http://localhost:3000");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

require '../Config/vendor/autoload.php';
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__FILE__, 1));
$dotenv->load();
class Auth_jwt
{
    private $encode;
    private $decode;

    public function authLoginJWT($payload)
    {
        $this->encode = JWT::encode($payload, $_ENV['KEY'], 'HS256');

        setcookie('token', $this->encode, [
            'expires' => time() + 20,  // Expira em 1 hora (3600 segundos)
            'path' => '/',               // Caminho do cookie ("/" = site todo)
            'domain' => '',              // Domínio (vazio = atual)
            'secure' => false,           // true se HTTPS; false no localhost
            'httponly' => true,          // Protege contra acesso via JavaScript
            'samesite' => 'Lax'          // Pode ser 'Lax', 'Strict' ou 'None'
        ]);

        return json_encode($this->encode);
    }


    public function authValid($token)
    {
        try {
            $decoded = JWT::decode($token, new Key($_ENV['KEY'], 'HS256'));
            return [
                'valid' => true,
                'data' => $decoded
            ];
        } catch (ExpiredException $e) {
            return [
                'valid' => false,
                'message' => 'Token expirado'
            ];
        } catch (Exception $e) {
            return [
                'valid' => false,
                'message' => 'Token inválido ou erro desconhecido'
            ];
        }
    }


}

$aux = $_POST['acao'] ?? null;
$cookie = $_COOKIE['token'] ?? '0';
if ($aux == 'valida') {
    $validaToken = new Auth_jwt;
    header('Content-Type: application/json');
    echo json_encode($validaToken->authValid($cookie));

}
