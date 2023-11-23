<?php
// Inclui o arquivo que contém a definição da classe Usuario
require_once "model/Usuario.php";

// Cria um novo objeto Usuario
$usuario = new Usuario();

$usuarioId = isset($_POST['id']) ? $_POST['id'] : null;

// Define as propriedades nome, cpf, email, senha e senhaConfirmar do objeto Usuario
// com os valores enviados pelo formulário
$usuario->nome = $_POST['nome'];
$usuario->cpf = $_POST['cpf'];
$usuario->email = $_POST['email'];
$usuario->senha = $_POST['senha'];
$usuario->senhaConfirmar = $_POST['senhaConfirmar'];



if ($usuarioId !== null) {

    $usuario->id = $usuarioId;

    // Chama o método excluir() no objeto Linha para remover a linha do banco de dados
    $usuario->atualizar();
    echo "<script>alert('Atualização realizado com sucesso!'); window.location.href = 'usuarioAdm.php';</script>";
    exit();

} else {

    // Trate o caso em que o ID é inválido
    // Por exemplo, redirecione para uma página de erro ou exiba uma mensagem
    echo "ID inválido";
}

if (!$usuario->verificarSenhasIguais()) {
    echo "<script>alert('As senhas não coincidem. Por favor, verifique e tente novamente.'); window.location.href = 'usuarioAdm.php';</script>";
    exit;
}

?>