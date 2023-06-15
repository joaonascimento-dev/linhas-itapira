<?php
class Usuario
{
    public $id;
    public $nome;
    public $cpf;
    public $email;
    public $senha;
    public $senhaConfirmar;

    // Define um método construtor na classe com parâmetro opcional
    public function __construct($id = false)
    {
        // Verifica se a variável $id foi definida
        if ($id){
            // Atribui o valor da $id à propriedade $id do objeto
            $this->id = $id;

            $this->carregar();
        }
    }

    public function inserir()
    {
        // Define a string SQL de inserção de dados na tabela "usuario"
        $sql = "INSERT INTO usuario (nome, cpf, email, senha, senhaConfirmar) 
        VALUES ('" . $this->nome . "', '" . $this->cpf . "', '" . $this->email . "', '" . $this->senha . "', '" . $this->senhaConfirmar . "')";

        // Cria uma nova conexão PDO com o banco de dados
        include_once "conexao.php";

        // Executa a string SQL na conexão, inserindo os dados na tabela "usuario"
        $conexao->exec($sql);
    }

    public function listar($id = false)
    {
        // Define a string SQL para selecionar todos os registros da tabela
        $sql = "";
        if ($id) {
            $sql = "SELECT * FROM usuario WHERE id = " . $id;
        } else {
            $sql = "SELECT * FROM usuario";
        }

        // Cria uma nova conexão PDO com o banco de dados
        include_once "conexao.php";

        // Executa a string SQL na conexão retornando um objeto de resultado
        $resultado = $conexao->query($sql);

        // Extrai todos os registros do objeto e os armazena em um array
        $lista = $resultado->fetchAll();

        // Retorna o array contendo todos os registros da tabela "usuario"
        return $lista;
    }

    public function carregar()
    {
        // Query SQL para buscar um usuário no banco de dados pelo id
        $sql = "SELECT * FROM usuario WHERE id=" . $this->id;
        include_once "conexao.php";

        // Execução da query e armazenamento do resultado em uma variável
        $resultado = $conexao->query($sql);

        // Recuperação do primeiro usuário do resultado como um array associativo
        $usuario = $resultado->fetch();

        // Atribuição dos valores dos campos recuperados do banco
        $this->nome = $usuario['nome'];
        $this->cpf = $usuario['cpf'];
        $this->email = $usuario['email'];
        $this->senha = $usuario['senha'];
    }

    public function atualizar()
    {
        // Query SQL para atualizar um usuário no banco de dados pelo id
        $sql = "UPDATE usuario SET
                nome = '$this->nome', cpf = '$this->cpf', email = '$this->email', senha = '$this->senha', senhaConfirmar = '$this->senha'
            WHERE id = $this->id ";

        include_once "conexao.php";
        $conexao->exec($sql);
    }

    public function verificarSenhasIguais()
{
    return $this->senha === $this->senhaConfirmar;
}

}
