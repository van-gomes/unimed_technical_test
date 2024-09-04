<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Exibir o diretório atual para depuração
echo "Diretório atual: " . __DIR__ . "<br>";

require '../config/Conexao.php';

$conexao = new Conexao();
$db = $conexao->conectar();

if($db) {
    echo "Conexão bem-sucedida!";
} else {
    echo "Erro na conexão.";
}
?>
