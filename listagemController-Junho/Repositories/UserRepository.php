<?php

require_once __DIR__.'/../Services/ConBD.php';

class UserRepository 
{
    public function getRepository():array
    {
        
        $db = new Connection();
        $conn = $db->connectionMSQL(); // Correção 1
 
        $sql = "SELECT * FROM listinventory"; // Correção 2

        $result = $conn->query($sql); // Correção 3: usamos query simples ao invés de prepare

        if ($result->num_rows > 0) {
            $repos = [];

            while ($row = $result->fetch_assoc()) {
                $repos[] = ($row); // Acumula os resultados no array
            }

            return ($repos);
        } else {
            return []; // Nenhum resultado
        }
    }
}

?>
