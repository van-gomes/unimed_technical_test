<?php

class Conexao {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "avaliacao_programador";

    public function conectar() {
        try {
            $conexao = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexao;
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
        }
    }
}

?>