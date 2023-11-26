<?php
session_start();

// Verifica se o usuário está autenticado
if (!isset($_SESSION['usuario_logado'])) {
    // O usuário não está autenticado, redireciona para a página de login
    header('Location: login.php');
    exit();
}

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
    <?php
    $ativo = "linhas";
    if (!isset($_SESSION['usuario_logado'])) {
        include("fragment/navbar2.php");
    } else {
        include("fragment/navbar3.php");
    }
    ?>

<div class="container mt-4 px-md-5">
        <h1 class="text-center mb-3 fw-semibold">Linhas de Onibus</h1>
        <div class="container-fluid h-100 d-flex align-items-center justify-content-center">
            <table class="table table-bordered table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <?php foreach ($lista as $index => $linha) : ?>
                    <tbody>
                        <tr class="<?php echo $index % 2 == 0 ? 'bg-secondary-subtle' : '' ?>">
                            <td><?php echo $linha['id'] ?></td>
                            <td><?php echo $linha['nome'] ?></td>
                            <td class="text-center"><a class="btn btn-warning" href="linha-editar.php?id=<?= $linha['id'] ?>">Editar Linha</i></a>
                                <a class="btn btn-warning" href="linha-excluir.php?id=<?= $linha['id'] ?>">Excluir Linha</i></a>
                            </td>
                        </tr>
                    </tbody>
                <?php endforeach ?>
            </table>
        </div>
        <div class="col mt-2 text-end">
            <a href="linha-novo.php" class="btn btn-lg btn-primary" ></i> Nova Linha</a>
        </div>
    </div>
</body>

</html>