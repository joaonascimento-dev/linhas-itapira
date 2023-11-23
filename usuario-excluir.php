<?php
// Inclui o arquivo que contém a definição da classe Linha
require_once "model/Usuario.php";

// Obtém o ID da linha a ser excluída a partir dos parâmetros da URL
$usuarioId = isset($_POST['id']) ? $_POST['id'] : null;

if ($usuarioId === null) {
    echo "<script>alert('ID do usuário não fornecido.'); window.location.href = 'usuarioAdm.php';</script>";
    exit;
}

// Verifica se o ID não está vazio
if ($usuarioId !== null) {
    // Cria um novo objeto Linha
    $usuario = new Usuario();

    // Define o ID da linha a ser excluída
    $usuario->id = $usuarioId;

    // Chama o método excluir() no objeto Linha para remover a linha do banco de dados
    $usuario->excluir();

    // Redireciona para a página linhaAdm.php após a exclusão
    echo "<script>alert('Exclusão realizado com sucesso!'); window.location.href = 'usuarioAdm.php';</script>";
    exit();
} else {
    // Trate o caso em que o ID é inválido
    // Por exemplo, redirecione para uma página de erro ou exiba uma mensagem
    echo "ID inválido";
}
?>

