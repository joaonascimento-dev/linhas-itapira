<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $sql = "SELECT * FROM usuario WHERE email = '{$email}' and senha = '{$senha}'";

  include_once "conexao.php";
  $resultado = $conexao->query($sql);
  $linha = $resultado->fetch();
  $usuario_logado = $linha['email'];

  if ($usuario_logado == null) {
    // Usuário ou senha inválida
    header('Location: usuario-erro.php');
    exit();
  } else {
    session_start();
    $_SESSION['usuario_logado'] = $usuario_logado;
    header('Location: linhas.php');
    exit();
  }
} else {
  // Método inválido
  header('Location: usuario-erro.php');
  exit();
}
?>
