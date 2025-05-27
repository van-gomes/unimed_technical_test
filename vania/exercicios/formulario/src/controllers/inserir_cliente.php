<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Exibir o diretório atual para depuração
echo "Diretório atual: " . __DIR__ . "<br>";

require_once __DIR__ . '/../config/conexao.php';
require_once __DIR__ . '/../models/Cliente.php';
require_once __DIR__ . '/../repositories/ClienteRepository.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $possuiPlano = $_POST['possui_plano'];
    $nomePlano = isset($_POST['plano']) ? $_POST['plano'] : null;

    $cliente = new Cliente($nome, $email, $possuiPlano, $nomePlano);
    $conexao = new Conexao();
    $clienteService = new ClienteRepository($conexao, $cliente);

    $clienteService->inserir();

    echo "Cliente inserido com sucesso!";
    exit();
}
?>