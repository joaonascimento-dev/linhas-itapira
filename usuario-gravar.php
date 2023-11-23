<?php
// Inclui o arquivo que contém a definição da classe Usuario
require_once "model/Usuario.php";

// Cria um novo objeto Usuario
$usuario = new Usuario ();

// Define as propriedades nome, cpf, email, senha e senhaConfirmar do objeto Usuario
// com os valores enviados pelo formulário
$usuario->nome = $_POST['nome'];
$usuario->cpf = $_POST['cpf'];
$usuario->email = $_POST['email'];
$usuario->senha = $_POST['senha'];
$usuario->senhaConfirmar = $_POST['senhaConfirmar'];

if (!$usuario->verificarSenhasIguais()) {
    echo "<script>alert('As senhas não coincidem. Por favor, verifique e tente novamente.'); window.location.href = 'cadastrar.php';</script>";
    exit;
}

// Chama o método inserir() no objeto Usuario para inserir
// os dados do novo usuário no banco de dados
$usuario->inserir();
echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href = 'usuarioAdm.php';</script>";

?>

