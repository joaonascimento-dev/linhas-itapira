<?php
class Horario
{
    public $id;
    public $inicio;
    public $fim;
    public $funcionamento;
    public $linhaId;
    //public $ano;

    // Define um metódo construtor na classe parâmetro opcional
    public function __construct($id = false)
    {
        // Verifica se a variável $id foi definida
        if ($id) {
            // Atribui o valor da $id à propriedade $id do objeto
            $this->id = $id;

            $this->carregar();
        }
    }

    public function inserir()
    {
        // Define a string SQL de inserção de dados na tabela "usuario"
        $sql = "INSERT INTO horarios (inicio, fim, funcionamento, linha_id) 
        VALUES ('" . $this->inicio . "', '" . $this->fim . "', '" . $this->funcionamento . "', '" . $this->linhaId . "')";

        // Cria uma nova conexão PDO com o banco de dados
        include_once "conexao.php";

        // Executa a string SQL na conexão, inserindo os dados na tabela "usuario"
        $conexao->exec($sql);
    }


    public function listar()
    {
        // Define a string SQL para selecionar todos os registros da tabela
        $sql = "SELECT h.id as hora_id, h.inicio, h.fim, h.funcionamento, h.linha_id, l.id, l.nome FROM horarios h JOIN linha l ON h.linha_id = l.id";

        // Cria uma nova conxeão PDO com o banco de dados "sis-escolar"
        include_once "./conexao.php";

        // Executa a string SQL na conexão retornando um objeto de resultado
        $resultado = $conexao->query($sql);

        // Extrai todos os registros do objeto e os armazena em um array
        $lista = $resultado->fetchAll();

        // Retorna o array contendo todos os registros da tabela "linha"
        return $lista;
    }


    public function carregar()
{
    // Query SQL para buscar uma linha no banco de dados pelo id
    $sql = "SELECT * FROM horarios WHERE id = :id";
    include_once "./conexao.php";

    try {
        // Preparação da query usando prepared statement
        $consulta = $conexao->prepare($sql);
        // Associação do parâmetro :id com o valor de $this->id
        $consulta->bindParam(':id', $this->id, PDO::PARAM_INT);
        // Execução da query
        $consulta->execute();

        // Recuperação da primeira linha do resultado como um array associativo
        $linha = $consulta->fetch();

        // Atribuição dos valores dos campos recuperados do banco
        $this->inicio = $linha['inicio'];
        $this->fim = $linha['fim'];
        $this->funcionamento = $linha['funcionamento'];
        $this->linhaId = $linha['linha_id'];

    } catch (PDOException $e) {
        // Tratamento de exceção, se necessário
        echo "Erro: " . $e->getMessage();
    }
}

    public function atualizar()
    {
        // Query SQL para atualizar um usuário no banco de dados pelo id
        $sql = "UPDATE horarios SET
                inicio = '$this->inicio', fim = '$this->fim', funcionamento = '$this->funcionamento', linhaId = '$this->linhaId'
            WHERE id = $this->id ";

        include_once "conexao.php";
     
        $conexao->exec($sql);
    }

    public function excluir()
    {
        // Define a string de consulta SQL para deletar um registro
        // da tabela "linha" com base no seu ID
        $sql = "DELETE FROM horarios WHERE id=" . $this->id;

        // Cria uma nova conexão PDO com o banco de dados localizado
        // no servidor "127.0.0.1" e autentica com o usuário "root" (sem senha)
        include_once "./conexao.php";

        // Executa a instrução SQL de exclusão utilizando o método
        // "exec" do objeto de conexão PDO criado acima
        $conexao->exec($sql);
    }
}
