<?php
$servername = "localhost";
$username = "tccvigia";
$password = "12026";
$dbname = "vigia";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conectado com sucesso";
?>
