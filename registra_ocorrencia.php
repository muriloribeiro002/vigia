<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'conexao.php';

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter dados do formulário
	$id_pessoa = $_POST['id_pessoa'];
    $tipo = $_POST['tipo'];
    $dt_evento = $_POST['dt_evento'];
    $endereco = $_POST['endereco'];
	$descricao = $_POST['descricao'];
    $dt_reg_ocorrencia = date('Y-m-d');


    // Inserir dados na tabela de ocorrências
    $sql = "INSERT INTO ocorrencia (ID_pessoa, dt_evento, tipo, endereco, descricao, dt_reg_ocorrencia) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isssss", $id_pessoa, $dt_evento, $tipo, $endereco, $descricao, $dt_reg_ocorrencia);

    if ($stmt->execute()) {
        echo "Nova ocorrência registrada com sucesso";
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Método de requisição inválido.";
}
?>


