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

    <script>

        src="https://code.jquery.com/jquery-3.6.4.min.js">

        $(document).ready(function () {
            // Adiciona um ouvinte de evento para o clique no botão
            $(document).on('click', '#open-modal', function () {
                // Obtém as informações da linha clicada
                var linhaNome = $(this).closest('tr').find('td:first-child').text();
                var inicio = $(this).closest('tr').find('td:nth-child(2)').text();
                var fim = $(this).closest('tr').find('td:nth-child(3)').text();

                // Constrói a string de detalhes
                var detalhes = "Linha: " + linhaNome + "<br> Saída Rodoviária: " + inicio + "<br> Saída do Ponto: " + fim;

                // Define o conteúdo do modal com os detalhes
                $('#detalhes-linha').html(detalhes);

                // Abre o modal
                $('#myModal').modal('show');
            });
        });
    </script>
</head>


<body>
    <?php
    $ativo = "horarios";
    if (!isset($_SESSION['usuario_logado'])) {
        include("fragment/navbar.php");
    } else {
        include("fragment/navbar2.php");
    }
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
                    <td colspan="5">
                        <Usuários href="#" class="btn btn-lg btn-outline-dark" class="secao-link">Novo Horário</a>
                    </td>
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
                        <th>Observação</th>
                    </tr>
                </thead>

                <?php $linhaAnterior = $linha['nome']; ?>
                <?php endif ?>
                <tbody>
                    <tr class="<?php echo $index % 2 == 0 ? 'bg-secondary-subtle' : '' ?>">
                        <td>
                            <?php echo $linha['nome'] ?>
                        </td>
                        <td>
                            <?php echo $linha['inicio'] ?>
                        </td>
                        <td>
                            <?php echo $linha['fim'] ?>
                        </td>
                        <td><!-- Botão para acionar modal -->
                            <button id="open-modal" class="btn btn-primary">Abrir modal</button>
                        </td>
                    </tr>
                </tbody>


                <?php endforeach ?>
                <a href="#"></i> Teste</a>
            </table>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detalhes do Horário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Aqui você pode exibir as informações do item -->
                    <p id="detalhes-linha"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>