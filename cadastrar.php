<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Página de Login</title>
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
  
<?php $ativo = "home";
  include("fragment/navbar.php"); ?>


  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card rounded-5 shadow-lg">
          <div class="card-header text-center">
            <a href="/" class="mb-2 mb-lg-0 my-5">
                <img src="img\logo2.png" alt="logo" height="60px">
              </a>
            <h4>Criar minha conta</h4>
          </div>
          <div class="card-body">
            <form action="usuario-gravar.php" method="POST">
              <div class="">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control form-control-lg" id="nome" name="nome" required>
              </div>
              <div class="">
                <label for="cpf" class="form-label">CPF:</label>
                <input type="text" class="form-control form-control-lg" id="cpf" name="cpf" required onkeyup="mascaraCPF(this)">
              </div>
              <div class="">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" class="form-control form-control-lg" id="email" name="email" required>
              </div>
              <div class="">
                <label for="senha" class="form-label">Senha:</label>
                <input type="password" class="form-control form-control-lg" id="senha" name="senha" required>
              </div>
              <div class="">
                <label for="senhaConfirmar" class="form-label">Confirme Senha:</label>
                <input type="password" class="form-control form-control-lg" id="senhaConfirmar" name="senhaConfirmar" required>
              </div>
              <div class="col mt-2 text-center">
                <button type="submit" class="btn btn-lg btn-primary"><i class="bi bi-person-plus-fill"></i>Criar Conta</button>
              </div>
              
            </form>
          </div>
          <div class="card-footer">
            <p class="text-center mt
