<?php
session_start();

// Verifica se o usuário está autenticado
if (!isset($_SESSION['usuario_logado'])) {
    // O usuário não está autenticado, redireciona para a página de login
    header('Location: login.php');
    exit();
}
//require_once "model/Linha.php";
require_once "model/Usuario.php";

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Create an instance of the Usuario class with the retrieved ID
    $usuario = new Usuario($id);

    // Check if the user with the given ID exists
    if (!$usuario->id) {
        // Redirect or handle the case where the user doesn't exist
        header("Location: usuarioAdm.php");
        exit;
    }
} else {
    // Redirect or handle the case where the 'id' parameter is not set
    header("Location: usuarioAdm.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Página de Cadastro</title>
  <?php include("fragment/head.html"); ?>
  <script>
    // Máscara para CPF
    function mascaraCPF(cpf) {
      cpf.value = cpf.value.replace(/\D/g, ''); // Remove todos os caracteres não numéricos
      cpf.value = cpf.value.replace(/(\d{3})(\d)/, '$1.$2'); // Adiciona um ponto após os primeiros 3 dígitos
      cpf.value = cpf.value.replace(/(\d{3})(\d)/, '$1.$2'); // Adiciona um ponto após os segundos 3 dígitos
      cpf.value = cpf.value.replace(/(\d{3})(\d{1,2})$/, '$1-$2'); // Adiciona um traço e os últimos 2 dígitos
    }
  </script>
</head>

<body class="fundo-mapa">


<?php
    $ativo = "horarios";
    if (!isset($_SESSION['usuario_logado'])) {
        include("fragment/navbar2.php");
    } else {
        include("fragment/navbar3.php");
    }
    ?>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card rounded-5 shadow-lg">
          <div class="card-header text-center">
            <a href="#" class="mb-2 mb-lg-0 my-5">
              <img src="img\logo2.png" alt="logo" height="60px">
            </a>
            <h4>Editar usuário</h4>
          </div>
          <div class="card-body">
            <form action="usuario-atualizar.php" method="POST">
              <div class="">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control form-control-lg" id="nome" name="nome" value="<?php echo $usuario->nome?>" required>
              </div>
              <div class="">
                <label for="cpf" class="form-label">CPF:</label>
                <input type="text" class="form-control form-control-lg" id="cpf" name="cpf" value="<?php echo $usuario->cpf?>" required onkeyup="mascaraCPF(this)">
              </div>
              <div class="">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" class="form-control form-control-lg" id="email" name="email" value="<?php echo $usuario->email?>" required>
              </div>
              <div class="">
                <label for="senha" class="form-label">Senha:</label>
                <input type="password" class="form-control form-control-lg" id="senha" name="senha" value="<?php echo $usuario->senha?>" required>
              </div>
              <div class="">
                <label for="senhaConfirmar" class="form-label">Confirme Senha:</label>
                <input type="password" class="form-control form-control-lg" id="senhaConfirmar" name="senhaConfirmar" value="<?php echo $usuario->senhaConfirmar?>" required>
              </div>
              <input type="hidden" name="linhaId" value="<?= $usuario->id ?>">
              <div class="col mt-2 text-center">
                <button type="submit" class="btn btn-lg btn-primary"> Editar Usuário</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>