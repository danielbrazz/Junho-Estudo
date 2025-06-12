<?php

require_once __DIR__ . '/../Services/ConBD.php';

class UserRepository 
{
    public function getRepository(): array
    {
        $db = new Connection();
        $conn = $db->connectionMSQL();

        $sql = "SELECT * FROM listinventory WHERE id = ?";
        $stmt = $conn->prepare($sql);

       

        $id = 1;
        $stmt->bind_param("i", $id);

        $stmt->execute();

        $result = $stmt->get_result(); // mysqlnd deve estar habilitado

        $data = [];

        if ($result) {
            $data = $result->fetch_assoc();
        }

        $stmt->close();
        $conn->close();

        return $data ?? []; // Garante que sempre retorna array
    }
}

$teste = new UserRepository;
var_dump($teste->getRepository());

?>
