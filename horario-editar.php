<?php
session_start();

// Verifica se o usuário está autenticado
if (!isset($_SESSION['usuario_logado'])) {
    // O usuário não está autenticado, redireciona para a página de login
    header('Location: login.php');
    exit();
}

require "model/Horario.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Create an instance of the Usuario class with the retrieved ID
    $horario = new Horario($id);
    

    // Check if the user with the given ID exists
    if (!$horario->id) {
        // Redirect or handle the case where the user doesn't exist
        header("Location: horarioAdm.php");
        exit;
    }
} else {
    // Redirect or handle the case where the 'id' parameter is not set
    header("Location: horarioAdm.php");
    exit;
}

date_default_timezone_set('America/Sao_Paulo');

?>

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
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card rounded-5 shadow-lg">
                    <div class="card-header text-center">
                        <a href="#" class="mb-2 mb-lg-0 my-5">
                            <img src="img\logo2.png" alt="logo" height="60px">
                        </a>
                        <h4>Editar Horário</h4>
                    </div>
                    <div class="card-body">
                        <form action="horario-atualizar.php" method="POST">
                            <div class="">
                                <label for="inicio" class="form-label">Inicio:</label>
                                <input type="time" class="form-control form-control-lg" id="inicio" name="inicio" value="<?php echo date('H:i', strtotime($horario->inicio)); ?>" required>
                            </div>
                            <div class="">
                                <label for="fim" class="form-label">Fim:</label>
                                <input type="time" class="form-control form-control-lg" id="fim" name="fim" value="<?php echo date('H:i', strtotime($horario->fim)); ?>" required>
                            </div>
                            <div class="">
                                <label for="funcionamento" class="form-label">Funcionamento:</label>
                                <input type="text" class="form-control form-control-lg" id="funcionamento" name="funcionamento" value="<?php echo $horario->funcionamento; ?>" required>
                            </div>
                            <input type="hidden" name="id" value="<?= $horario->id ?>">
                            <div class="col mt-2 text-center">
                                <button type="submit" class="btn btn-lg btn-primary"> Editar Horário</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>