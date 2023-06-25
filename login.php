<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Página de Login</title>
  <?php include("fragment/head.html"); ?>
</head>

<body class="fundo-mapa">

<?php $ativo = "home";
  include("fragment/navbar.php"); ?>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card rounded-5 shadow-lg">
          <div class="card-header text-center">
            <a href="#" class="mb-2 mb-lg-0 my-5">
                <img src="img\logo2.png" alt="logo" height="60px">
              </a>
            <h4>Acessar minha conta</h4>
          </div>
          <div class="card-body">
            <form action="usuario-login.php" method="POST">
              <div class="">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" class="form-control form-control-lg" id="email" name="email" required>
              </div>
              <div class="">
                <label for="senha" class="form-label">Senha:</label>
                <input type="password" class="form-control form-control-lg" id="senha" name="senha" required>
              </div>
              <div class="col mt-2 text-center">
                <button type="submit" class="btn btn-lg btn-primary"><i class="bi bi-box-arrow-in-right"></i> Entrar</button>
              </div>
              
            </form>
          </div>
          <div class="card-footer">
            <p class="text-center mt-2">Não possui conta? <a href="cadastrar.php" class="btn btn-outline-primary ms-2"><i class="bi bi-person-plus-fill"></i> Cadastrar</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
