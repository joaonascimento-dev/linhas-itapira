<?php
// Inclui o arquivo que contém a definição da classe Linha
require_once "model/Linha.php";

// Obtém o ID da linha a ser excluída a partir dos parâmetros da URL
$linhaId = isset($_GET['id']) ? $_GET['id'] : null;

// Verifica se o ID não está vazio
if ($linhaId !== null) {
    // Cria um novo objeto Linha
    $linha = new Linha();

    // Define o ID da linha a ser excluída
    $linha->id = $linhaId;

    // Chama o método excluir() no objeto Linha para remover a linha do banco de dados
    $linha->excluir();

    // Redireciona para a página linhaAdm.php após a exclusão
    echo "<script>alert('Exclusão realizado com sucesso!'); window.location.href = 'linhaAdm.php';</script>";
    exit();
} else {
    // Trate o caso em que o ID é inválido
    // Por exemplo, redirecione para uma página de erro ou exiba uma mensagem
    echo "ID inválido";
}
?>

