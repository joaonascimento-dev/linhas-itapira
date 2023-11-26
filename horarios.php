<?php
//require_once "model/Linha.php";
require_once "model/Horario.php";
require_once "usuario-verifica.php";


//$linha = new Linha();
$horario = new Horario();

//$lista = $linha->listar();
$lista = $horario->listar();

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
    include("fragment/navbar.php");
    
    ?>

    <div class="container mt-4 px-md-5">
        <h1 class="text-center mb-3 fw-semibold">Horários das Linhas</h1>
        <div class="container-fluid h-100 d-flex align-items-center justify-content-center">
            <table class="table table-bordered table-bordered">
                <?php $linhaAnterior = null; ?>
                <?php foreach ($lista as $index => $linha) : ?>
                    <?php
                    $dia = "";
                    if ($linha['funcionamento'] == 0) {
                        $dia = "SEGUNDA A SEXTA";
                    } else if ($linha['funcionamento'] == 1) {
                        $dia = "SABADO";
                    } else if ($linha['funcionamento'] == 2) {
                        $dia = "DOMINGO";
                    }
                    ?>
                    <?php if ($linha['nome'] !== $linhaAnterior) : ?>
                        <?php if ($index > 0) : ?>
                            <tr class="spacer">
                                <td colspan="5"></td>
                            </tr> <!-- Adiciona uma linha vazia -->
                        <?php endif ?>
                        <thead>
                            <tr>
                                <th colspan="5">
                                    <?php echo "LINHA:" . $linha['id'] . " - " . $linha['nome'] . " - " . $dia ?>
                                </th>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                                <th>Linha Principal</th>
                                <th>Saída Rodoviária</th>
                                <th>Saída do Ponto</th>
                            </tr>
                        </thead>
                        <?php $linhaAnterior = $linha['nome']; ?>
                    <?php endif ?>

                    <tbody>
                        <tr class="<?php echo $index % 2 == 0 ? 'bg-secondary-subtle' : '' ?>">
                            <td><?php echo $linha['nome'] ?></td>
                            <td><?php echo $linha['inicio'] ?></td>
                            <td><?php echo $linha['fim'] ?></td>
                        </tr>
                    </tbody>
                <?php endforeach ?>
            </table>


        </div>
    </div>
</body>

</html>