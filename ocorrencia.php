<?php
include 'conexao.php';

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter dados do formulário
    $descricao = $_POST['descricao'];
    $dt_evento = $_POST['dt_evento'];
    $tipo = $_POST['tipo'];
    $endereco = $_POST['endereco'];
    $dt_reg_ocorrencia = date('Y-m-d');
    $id_pessoa = 1;

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


