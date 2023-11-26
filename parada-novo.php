<?php
session_start();

// Verifica se o usuário está autenticado
if (!isset($_SESSION['usuario_logado'])) {
    // O usuário não está autenticado, redireciona para a página de login
    header('Location: login.php');
    exit();
}

require "model/Horario.php";
$horario = new Horario();

// Obtem a lista de linhas
$linhas = $horario->listarLinhas();
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
                        <h4>Criar Parada</h4>
                    </div>
                    <div class="card-body">
                        <form action="parada-gravar.php" method="POST">
                            <div class="">
                                <label for="nome" class="form-label">Nome:</label>
                                <input type="text" class="form-control form-control-lg" id="nome" name="nome" required>
                            </div>
                            <div class="">
                                <label for="latitude" class="form-label">Latitude:</label>
                                <input type="text" class="form-control form-control-lg" id="latitude" name="latitude" required>
                            </div>
                            <div class="">
                                <label for="longitude" class="form-label">Longitude:</label>
                                <input type="text" class="form-control form-control-lg" id="longitude" name="longitude" required>
                            </div>
                            <div class="">
                                <label for="linhaId" class="form-label">Linha:</label>
                                <select class="form-control form-control-lg" id="linhaId" name="linhaId" required>
                                    <?php foreach ($linhas as $linha) : ?>
                                        <option value="<?= $linha['id'] ?>"><?= $linha['nome'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col mt-2 text-center">
                                <button type="submit" class="btn btn-lg btn-primary"></i> Criar Parada</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
