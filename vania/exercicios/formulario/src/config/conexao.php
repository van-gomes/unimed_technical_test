<?php

class Conexao {
    private $host = "";
    private $user = "";
    private $pass = "";
    private $dbname = "sistema_clientes";

    public function conectar() {
        try {
            $conexao = new PDO(
                "sqlsrv:Server=$this->host,1433;Database=$this->dbname;Encrypt=no;TrustServerCertificate=yes",
                $this->user,
                $this->pass
            );
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexao;
        } catch (PDOException $e) {
            echo 'Erro ao conectar ao banco: ' . $e->getMessage();
            exit();
        }
    }
}
?>