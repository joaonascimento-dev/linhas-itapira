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
        if ($id){
            // Atribui o valor da $id à propriedade $id do objeto
            $this->id = $id;

            $this->carregar();
        }
    }


public function listar()
{
    // Define a string SQL para selecionar todos os registros da tabela
    $sql = "SELECT h.inicio, h.fim, h.funcionamento, h.linha_id, l.id, l.nome FROM horarios h JOIN linha l ON h.linha_id = l.id";

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
    $sql = "SELECT * FROM horario WHERE id=" . $this->id;
    include_once "./conexao.php";

    // Execução da query e armazenamento do resultado em uma variável
    $resultado = $conexao->query($sql);
    // Recuperação da primeira linha do resultado como um array associativo
    $linha = $resultado->fetch();

    //Atribuição dos valores dos campos recuperados do banco
    
}
}