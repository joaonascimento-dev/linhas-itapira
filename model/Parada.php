<?php
class Parada
{
    public $id;
    public $nome;
    public $latitude;
    public $longitude;
    public $linhaId;

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
        // Define a string SQL de inserção de dados na tabela "parada"
        $sql = "INSERT INTO parada (nome, latitude, longitude, linhaId) 
        VALUES ('" .$this->nome. "', '" .$this->latitude. "' ,'" .$this->longitude.  "' , '" .$this->linhaId. "')";

        // Cria uma nova conexão PDO com o banco de dados "sis-escolar"
        include_once "./conexao.php";

        // Executa a string SQL na conexão, inserindo os dados na tabela "parada"
        $conexao->exec($sql);

        echo "Registro gravado com sucesso";
    }

public function listar($linhaId = false)
{
    // Define a string SQL para selecionar todos os registros da tabela
    $sql = "";
    if ($linhaId) {
        $sql = "SELECT * FROM parada WHERE linhaId = " . $linhaId;
    } else {
        $sql = "SELECT * FROM parada";
    }

    // Cria uma nova conxeão PDO com o banco de dados "sis-escolar"
    include_once "./conexao.php";

    // Executa a string SQL na conexão retornando um objeto de resultado
    $resultado = $conexao->query($sql);

    // Extrai todos os registros do objeto e os armazena em um array
    $lista = $resultado->fetchAll();

    // Retorna o array contendo todos os registros da tabela "parada"
    return $lista;
}

public function excluir()
{
    // Define a string de consulta SQL para deletar um registro
    // da tabela "parada" com base no seu ID
    $sql = "DELETE FROM parada WHERE id=".$this->id;

    // Cria uma nova conexão PDO com o banco de dados localizado
    // no servidor "127.0.0.1" e autentica com o usuário "root" (sem senha)
    include_once "./conexao.php";
    
    // Executa a instrução SQL de exclusão utilizando o método
    // "exec" do objeto de conexão PDO criado acima
    $conexao->exec($sql);
}

public function carregar()
{
    // Query SQL para buscar uma parada no banco de dados pelo id
    $sql = "SELECT * FROM parada WHERE id=" . $this->id;
    include_once "./conexao.php";

    // Execução da query e armazenamento do resultado em uma variável
    $resultado = $conexao->query($sql);
    // Recuperação da primeira parada do resultado como um array associativo
    $parada = $resultado->fetch();

    //Atribuição dos valores dos campos recuperados do banco
    $this->nome = $parada['nome'];
    $this->latitude = $parada['latitude'];
    $this->longitude = $parada['longitude'];
    $this->linhaId = $parada ['linhaId'];
}

public function atualizar()
{
    // Query SQL para atualizar uma parada no banco de dados pelo id
    $sql = "UPDATE parada SET
                nome = '$this->nome' , latitude = '$this->latitude' , longitude = '$this->longitude' , linhaID = '$this->linhaId'
            WHERE id = $this->id ";
    
    include_once "./conexao.php";
    $conexao->exec($sql);
}

}