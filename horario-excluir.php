<?php
// Inclui o arquivo que contém a definição da classe Linha
require_once "model/Horario.php";

// Obtém o ID da linha a ser excluída a partir dos parâmetros da URL
$horarioId = isset($_GET['id']) ? $_GET['id'] : null;

// Verifica se o ID não está vazio
if ($horarioId !== null) {
    // Cria um novo objeto Linha
    $horario = new Horario();

    // Define o ID da linha a ser excluída
    $horario->id = $horarioId;

    // Chama o método excluir() no objeto Linha para remover a linha do banco de dados
    $horario->excluir();

    // Redireciona para a página linhaAdm.php após a exclusão
    echo "<script>alert('Exclusão realizado com sucesso!'); window.location.href = 'horarioAdm.php';</script>";
    exit();
} else {
    // Trate o caso em que o ID é inválido
    // Por exemplo, redirecione para uma página de erro ou exiba uma mensagem
    echo "ID inválido";
}
?>

