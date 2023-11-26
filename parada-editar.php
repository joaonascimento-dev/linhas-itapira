<?php
session_start();

// Verifica se o usuário está autenticado
if (!isset($_SESSION['usuario_logado'])) {
    // O usuário não está autenticado, redireciona para a página de login
    header('Location: login.php');
    exit();
}

require "model/Parada.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Create an instance of the Usuario class with the retrieved ID
    $parada = new Parada($id);
    
    // Check if the user with the given ID exists
    if (!$parada->id) {
        // Redirect or handle the case where the user doesn't exist
        header("Location: paradaAdm.php");
        exit;
    }
} else {
    // Redirect or handle the case where the 'id' parameter is not set
    header("Location: paradaAdm.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Página de Cadastro</title>
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
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card rounded-5 shadow-lg">
                    <div class="card-header text-center">
                        <a href="#" class="mb-2 mb-lg-0 my-5">
                            <img src="img\logo2.png" alt="logo" height="60px">
                        </a>
                        <h4>Editar Parada</h4>
                    </div>
                    <div class="card-body">
                        <form action="parada-atualizar.php" method="POST">
                            <div class="">
                                <label for="nome" class="form-label">Nome:</label>
                                <input type="text" class="form-control form-control-lg" id="nome" name="nome" value="<?php echo $parada->nome ?>" required>
                            </div>
                            <div class="">
                                <label for="latitude" class="form-label">Latitude:</label>
                                <input type="text" class="form-control form-control-lg" id="latitude" name="latitude" value="<?php echo $parada->latitude ?>" required>
                            </div>
                            <div class="">
                                <label for="longitude" class="form-label">Longitude:</label>
                                <input type="text" class="form-control form-control-lg" id="longitude" name="longitude" value="<?php echo $parada->longitude ?>" required>
                            </div>
                            <input type="hidden" name="id" value="<?= $parada->id ?>">
                            <input type="hidden" name="linhaId" value="<?= $parada->linhaId ?>">
                            <div class="col mt-2 text-center">
                                <button type="submit" class="btn btn-lg btn-primary"></i> Editar Parada</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>