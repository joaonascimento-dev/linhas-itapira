<?php require_once "usuario-verifica.php";
require "model/Horario.php";

//$linha = new Linha();
$horario = new Horario();

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $linhaId = $_GET['id'];

} else {
    // Redirect or handle the case where the 'id' parameter is not set
    exit;
}

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
                        <h4>Criar Horário para linha</h4>
                    </div>
                    <div class="card-body">
                        <form action="horario-gravar.php" method="POST">
                            <div class="">
                                <label for="inicio" class="form-label">Inicio:</label>
                                <input type="time" class="form-control form-control-lg" id="inicio" name="inicio" required>
                            </div>
                            <div class="">
                                <label for="fim" class="form-label">Fim:</label>
                                <input type="time" class="form-control form-control-lg" id="fim" name="fim" required>
                            </div>
                            <div class="">
                                <label for="funcionamento" class="form-label">Funcionamento:</label>
                                <input type="text" class="form-control form-control-lg" id="funcionamento" name="funcionamento" required>
                            </div>
                            <input type="hidden" id="linhaId" name="linhaId" value="<?= $linhaId ?>">
                            <div class="col mt-2 text-center">
                                <button type="submit" class="btn btn-lg btn-primary"> Criar Horario</button>
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