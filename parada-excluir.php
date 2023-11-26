<?php
// Inclui o arquivo que contém a definição da classe Linha
require_once "model/Parada.php";

// Obtém o ID da linha a ser excluída a partir dos parâmetros da URL
$paradaId = isset($_GET['id']) ? $_GET['id'] : null;

// Verifica se o ID não está vazio
if ($paradaId !== null) {
    // Cria um novo objeto Linha
    $parada = new Parada();

    // Define o ID da linha a ser excluída
    $parada->id = $paradaId;

    // Chama o método excluir() no objeto Linha para remover a linha do banco de dados
    $parada->excluir();

    // Redireciona para a página linhaAdm.php após a exclusão
    echo "<script>alert('Exclusão realizado com sucesso!'); window.location.href = 'paradaAdm.php';</script>";
    exit();
} else {
    // Trate o caso em que o ID é inválido
    // Por exemplo, redirecione para uma página de erro ou exiba uma mensagem
    echo "ID inválido";
}
?>

