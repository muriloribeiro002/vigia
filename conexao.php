<?php
$servername = "localhost";
$username = "adimvigia";
$password = "aamr2024";
$dbname = "vigia";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conectado com sucesso";
?>
