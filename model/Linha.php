<?php
class Linha
{
    public $id;
    public $nome;
    //public $ano;

    // Define um metódo construtor na classe parâmetro opcional
    public function __construct($id = false)
    {
        // Verifica se a variável $id foi definida
        if ($id){
            // Atribui o valor da $id à propriedade $id do objeto
            $this->id = $id;

            $this->carregar();
        }
    }


    public function inserir ()
    {
        // Define a string SQL de inserção de dados na tabela "linha"
        $sql = "INSERT INTO linha (nome, ano) VALUES ('" .$this->nome. "')"; //, '" .$this->ano. "')";

        // Cria uma nova conexão PDO com o banco de dados "sis-escolar"
        include_once "./conexao.php";

        // Executa a string SQL na conexão, inserindo os dados na tabela "linha"
        $conexao->exec($sql);

        echo "Registro gravado com sucesso";
        
    }


public function listar()
{
    // Define a string SQL para selecionar todos os registros da tabela
    $sql = "SELECT * FROM linha";

    // Cria uma nova conxeão PDO com o banco de dados "sis-escolar"
    include_once "./conexao.php";

    // Executa a string SQL na conexão retornando um objeto de resultado
    $resultado = $conexao->query($sql);

    // Extrai todos os registros do objeto e os armazena em um array
    $lista = $resultado->fetchAll();

    // Retorna o array contendo todos os registros da tabela "linha"
    return $lista;

}

public function excluir()
{
    // Define a string de consulta SQL para deletar um registro
    // da tabela "linha" com base no seu ID
    $sql = "DELETE FROM linha WHERE id=".$this->id;

    // Cria uma nova conexão PDO com o banco de dados localizado
    // no servidor "127.0.0.1" e autentica com o usuário "root" (sem senha)
    include_once "./conexao.php";
    
    // Executa a instrução SQL de exclusão utilizando o método
    // "exec" do objeto de conexão PDO criado acima
    $conexao->exec($sql);

}

public function carregar()
{
    // Query SQL para buscar uma linha no banco de dados pelo id
    $sql = "SELECT * FROM linha WHERE id=" . $this->id;
    include_once "./conexao.php";

    // Execução da query e armazenamento do resultado em uma variável
    $resultado = $conexao->query($sql);
    // Recuperação da primeira linha do resultado como um array associativo
    $linha = $resultado->fetch();

    //Atribuição dos valores dos campos recuperados do banco
    $this->nome = $linha['nome'];
}

public function atualizar()
{
    // Query SQL para atualizar uma linha no banco de dados pelo id
    $sql = "UPDATE linha SET
                nome = '$this->nome'
            WHERE id = $this->id ";
    
    include_once "./conexao.php";
    $conexao->exec($sql);
}

}