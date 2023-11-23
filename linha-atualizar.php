<?php
// Inclui o arquivo que contém a definição da classe Usuario
require_once "model/Linha.php";

// Cria um novo objeto Usuario
$linha = new Linha();

$linhaId = isset($_POST['id']) ? $_POST['id'] : null;

// Define as propriedades nome, cpf, email, senha e senhaConfirmar do objeto Usuario
// com os valores enviados pelo formulário
$linha->nome = $_POST['nome'];

if ($linhaId !== null) {

    $linha->id = $linhaId;

    // Chama o método excluir() no objeto Linha para remover a linha do banco de dados
    $linha->atualizar();
    echo "<script>alert('Atualização realizado com sucesso!'); window.location.href = 'linhaAdm.php';</script>";
    exit();

} else {

    // Trate o caso em que o ID é inválido
    // Por exemplo, redirecione para uma página de erro ou exiba uma mensagem
    echo "ID inválido";
}
?>