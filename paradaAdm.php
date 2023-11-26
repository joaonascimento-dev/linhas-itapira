<?php
session_start();

// Verifica se o usuário está autenticado
if (!isset($_SESSION['usuario_logado'])) {
    // O usuário não está autenticado, redireciona para a página de login
    header('Location: login.php');
    exit();
}

//require_once "model/Linha.php";
require_once "model/Parada.php";

//$linha = new Linha();
$parada = new Parada();

//$lista = $linha->listar();
$lista = $parada->listar();

?>
<!DOCTYPE html>
<html>

<head>
    <title>Linhas Itapira</title>
    <?php include("fragment/head.html"); ?>
</head>


<body>
    <?php
    $ativo = "horarios";
    if (!isset($_SESSION['usuario_logado'])) {
        include("fragment/navbar2.php");
    } else {
        include("fragment/navbar3.php");
    }
    ?>

    <div class="container mt-4 px-md-5">
        <h1 class="text-center mb-3 fw-semibold">Paradas de Ônibus</h1>
        <div class="container-fluid h-100 d-flex align-items-center justify-content-center">
            <table class="table table-bordered table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <?php foreach ($lista as $index => $linha) : ?>
                    <tbody>
                        <tr class="<?php echo $index % 2 == 0 ? 'bg-secondary-subtle' : '' ?>">
                            <td><?php echo $linha['id'] ?></td>
                            <td><?php echo $linha['nome'] ?></td>
                            <td><?php echo $linha['latitude'] ?></td>
                            <td><?php echo $linha['longitude'] ?></td>
                            <td class="text-center"><a class="btn btn-warning" href="parada-editar.php?id=<?= $linha['id'] ?>">Editar Parada</i></a>
                                <a class="btn btn-warning" href="parada-excluir.php?id=<?= $linha['id'] ?>">Excluir Parada</i></a>
                            </td>
                        </tr>
                    </tbody>
                <?php endforeach ?>
            </table>

        </div>
        <div class="col mt-2 text-end">
            <a href="parada-novo.php" class="btn btn-lg btn-primary"> Nova Parada</a>
        </div>
    </div>
</body>

</html>