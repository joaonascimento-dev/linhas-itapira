<?php require_once "usuario-verifica.php";
require "model/Linha.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Create an instance of the Usuario class with the retrieved ID
    $linha = new Linha($id);

    // Check if the user with the given ID exists
    if (!$linha->id) {
        // Redirect or handle the case where the user doesn't exist
        header("Location: linhaAdm.php");
        exit;
    }
} else {
    // Redirect or handle the case where the 'id' parameter is not set
    header("Location: linhaAdm.php");
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
                        <h4>Editar Linha</h4>
                    </div>
                    <div class="card-body">
                        <form action="linha-atualizar.php" method="POST">
                            <div class="">
                                <label for="nome" class="form-label">Nome da linha:</label>
                                <input type="text" class="form-control form-control-lg" id="nome" name="nome" value="<?php echo $linha->nome ?>">
                            </div>
                            <input type="hidden" name="id" value="<?= $linha->id ?>">
                            <div class="col mt-2 text-center">
                                <button type="submit" class="btn btn-lg btn-primary"> Editar Linha</button>
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