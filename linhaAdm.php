<?php
require_once "model/Linha.php";
require_once "usuario-verifica.php";
$linha = new Linha();
$lista = $linha->listar();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Linhas Itapira</title>
    <?php include("fragment/head.html"); ?>
</head>

<body>
    <?php
    $ativo = "linhas";
    if (!isset($_SESSION['usuario_logado'])) {
        include("fragment/navbar2.php");
    } else {
        include("fragment/navbar3.php");
    }
    ?>

    <div class="container mt-4 px-md-5">
        <h1 class="text-center mb-3 fw-semibold">Linhas de Ônibus</h1>
        <div class="d-grid table border rounded px-3">
            <?php foreach ($lista as $index => $linha) : ?>
                <div class="row position-relative py-2 <?php echo $index % 2 == 0 ? '' : 'bg-body-secondary'; ?>">
                    <div class="col"><span><?php echo $linha['nome'] ?></span></div>
                    <div class="col-4 text-end">
                        <a class="btn btn-warning" href="linha-editar.php?id=<?= $linha['id'] ?>">Editar Linha</i></a>
                        <a class="btn btn-warning" href="linha-excluir.php?id=<?= $linha['id'] ?>">Excluir Linha</i></a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <div class="col mt-2 text-end">
            <a href="linha-novo.php" class="btn btn-lg btn-primary" ></i> Nova Linha</a>
        </div>
    </div>
</body>

</html>