<?php require_once "usuario-verifica.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Linhas Itapira</title>
  <?php include("fragment/head.html"); ?>
</head>

<body class="fundo-mapa">

  <?php
  $ativo = "home";

  if (!isset($_SESSION['usuario_logado'])) {
    include("fragment/navbar.php");
  } else {
    include("fragment/navbar2.php");
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
          </div>

        </div>
      </div>
    </div>
  </div>
</body>

</html>