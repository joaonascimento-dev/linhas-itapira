
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Linhas Itapira</title>
  <?php include("fragment/head.html"); ?>
</head>

<body class="fundo-mapa">

  <?php
  $ativo = "home";

  include("fragment/navbar.php");

  ?>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card rounded-5 shadow-lg">
          <div class="card-header rounded-5 text-center">
            <a href="#" class="mb-2 mb-lg-0 my-5">
              <img src="img\logo2.png" alt="logo" height="60px">
            </a>
          </div>

        </div>
      </div>
    </div>

    <div class="row justify-content-center mt-3">
      <div class="col-md-6">
        <div class="row bg-white rounded py-3 mx-0">
          <div class="col d-grid">
            <a href="horarios.php" class="btn btn-lg btn-outline-dark"><i class="bi bi-clock"></i> Horários</a>
          </div>
          <div class="col d-grid">
          <a href="linhas.php" class="btn btn-lg btn-outline-dark"><i class="bi bi-sign-turn-right"></i> Linhas</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</body>

</html>