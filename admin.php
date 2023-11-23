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
    include("fragment/navbar2.php");
  } else {
    include("fragment/navbar3.php");
  }

  ?>

  <div class="container mt-5">
    

    <div class="row justify-content-center mt-3">
      <div class="col-md-6">
        <div class="row bg-white rounded py-3 mx-0">
          <div class="col d-grid">
            <a href="horarioAdm.php" class="btn btn-lg btn-outline-dark" class="secao-link" onclick="loadSection('teste')"><i class="bi bi-clock"></i> Horários</a>
          </div>
          <div class="col d-grid">
            <a href="linhaAdm.php" class="btn btn-lg btn-outline-dark" class="secao-link" onclick="loadSection('admLinhas')"><i class="bi bi-sign-turn-right"></i> Linhas</a>
          </div>
          <div class="col d-grid">
            <a href="usuarioAdm.php" class="btn btn-lg btn-outline-dark" class="secao-link" onclick="loadSection('admUsuarios')"><i class="bi bi-person"></i> Usuários</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</body>

</html>