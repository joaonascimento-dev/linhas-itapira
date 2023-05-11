<?php
require_once "model/Linha.php";
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
    <?php $ativo = "linhas";
    include("fragment/navbar.php"); ?>

    <div class="container mt-4 px-md-5">
        <h1 class="text-center mb-3 fw-semibold">Linhas de Ônibus</h1>
        <div class="d-grid table border rounded px-3">
            <?php foreach ($lista as $index=>$linha) : ?>
                <div class="row position-relative py-2 <?php echo $index % 2 == 0 ? '' : 'bg-body-secondary'; ?>">
                    <div class="col"><span><?php echo $linha['nome'] ?></span></div>
                    <div class="col-2 text-end">
                        <a class="btn btn-outline-dark stretched-link" href="turmas-editar.php?id=<?= $linha['id'] ?>"><i class="bi bi-chevron-right"></i></a>
                    </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</body>
</html>