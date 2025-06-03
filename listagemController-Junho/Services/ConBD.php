<?php
$servername = "localhost";
$username = "root";           // Padrão no XAMPP
$password = "";               // Normalmente em branco
$dbname = "controllerlist";   // Seu banco

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
