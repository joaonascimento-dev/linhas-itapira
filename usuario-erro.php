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
                        <h1 class="text-center">Acesso Negado!</h1>
                        <div class="text-center my-3">
                            <a href="login.php" class="btn btn-lg btn-dark me-2"><i class="bi bi-person-circle"></i> Tentar novamente o Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>