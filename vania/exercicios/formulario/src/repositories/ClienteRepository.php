<?php

class ClienteRepository {
    private $conexao;
    private $cliente;

    public function __construct(Conexao $conexao, Cliente $cliente) {
        $this->conexao = $conexao->conectar();
        $this->cliente = $cliente;
    }

    public function inserir() {
        $query = 'INSERT INTO clientes(nome, email, possui_plano, nome_plano) VALUES(:nome, :email, :possui_plano, :nome_plano)';
        $stmt = $this->conexao->prepare($query);
    
        $nome = mb_convert_encoding($this->cliente->getNome(), "UTF-8", "auto");
        $email = mb_convert_encoding($this->cliente->getEmail(), "UTF-8", "auto");
        $nomePlano = mb_convert_encoding($this->cliente->getNomePlano(), "UTF-8", "auto");
    
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':email', $email);
        $possuiPlano = $this->cliente->getPossuiPlano() === 'S' ? 1 : 0;
        $stmt->bindValue(':possui_plano', $possuiPlano, PDO::PARAM_INT);
        $stmt->bindValue(':nome_plano', $nomePlano);
        $stmt->execute();
    }    
}

?>
