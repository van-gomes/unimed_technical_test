<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "avaliacao_programador";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$possui_plano = $_POST['possui_plano'];
$plano = $possui_plano == 'S' ? $_POST['plano'] : '';

$sql = "INSERT INTO CLIENTE (NOME, EMAIL, POSSUI_PLANO, PLANO) VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $nome, $email, $possui_plano, $plano);

if ($stmt->execute()) {
    echo "Novo registro criado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fechar a conexão
$stmt->close();
$conn->close();
?>
