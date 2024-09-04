<?

class ClienteService {
    private $conexao;
    private $cliente;

    public function __construct(Conexao $conexao, Cliente $cliente) {
        $this->conexao = $conexao->conectar();
        $this->cliente = $cliente;
    }

    public function inserir() {
        $query = 'INSERT INTO clientes(nome, email, possui_plano, nome_plano) VALUES(:nome, :email, :possui_plano, :nome_plano)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':nome', $this->cliente->getNome());
        $stmt->bindValue(':email', $this->cliente->getEmail());
        $stmt->bindValue(':possui_plano', $this->cliente->getPossuiPlano());
        $stmt->bindValue(':nome_plano', $this->cliente->getNomePlano());
        $stmt->execute();
    }
}

?>
