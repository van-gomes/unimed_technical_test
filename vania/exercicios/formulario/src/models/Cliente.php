<?php
class Cliente {
    private $nome;
    private $email;
    private $possuiPlano;
    private $nomePlano;

    public function __construct($nome, $email, $possuiPlano, $nomePlano = null) {
        $this->nome = $nome;
        $this->email = $email;
        $this->possuiPlano = $possuiPlano;
        $this->nomePlano = $nomePlano;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPossuiPlano() {
        return $this->possuiPlano;
    }

    public function getNomePlano() {
        return $this->nomePlano;
    }
}

?>