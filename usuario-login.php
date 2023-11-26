<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE email = '{$email}' and senha = '{$senha}'";

    include_once "conexao.php";
    $resultado = $conexao->query($sql);
    $linha = $resultado->fetch();
    $usuario_logado = $linha['nome'];

    if ($usuario_logado == null) {
        // Usuário ou senha inválida
        header('Location: usuario-erro.php');
        exit();
    } else {
        // Define a variável de sessão
        $_SESSION['usuario_logado'] = $usuario_logado;

        // Redireciona para a página admin.php após o login bem-sucedido
        header('Location: admin.php');
        exit();
    }
} else {
    // Método inválido
    header('Location: usuario-erro.php');
    exit();
}
?>
