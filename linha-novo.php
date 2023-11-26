<?php

session_start();

// Verifica se o usuário está autenticado
if (!isset($_SESSION['usuario_logado'])) {
    // O usuário não está autenticado, redireciona para a página de login
    header('Location: login.php');
    exit();
}
require "model/Linha.php";

//$linha = new Linha();
$linha = new Linha();

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
                        <h4>Criar Linha</h4>
                    </div>
                    <div class="card-body">
                        <form action="linha-gravar.php" method="POST">
                            <div class="">
                                <label for="nome" class="form-label">Nome da linha:</label>
                                <input type="text" class="form-control form-control-lg" id="nome" name="nome" required>
                            </div>
                            <div class="col mt-2 text-center">
                                <button type="submit" class="btn btn-lg btn-primary"></i> Criar Linha</button>
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