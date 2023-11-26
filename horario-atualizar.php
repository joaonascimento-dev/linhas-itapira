<?php
// Inclui o arquivo que contém a definição da classe Usuario
require_once "model/Horario.php";

// Cria um novo objeto Usuario
$horario = new Horario();

$horarioId = isset($_POST['id']) ? $_POST['id'] : null;

// Define as propriedades nome, cpf, email, senha e senhaConfirmar do objeto Usuario
// com os valores enviados pelo formulário
$horario->inicio = $_POST['inicio'];
$horario->fim = $_POST['fim'];
$horario->funcionamento = $_POST['funcionamento'];

if ($horarioId !== null) {

    $horario->id = $horarioId;

    // Chama o método excluir() no objeto Linha para remover a linha do banco de dados
    $horario->atualizar();
    echo "<script>alert('Atualização realizado com sucesso!'); window.location.href = 'horarioAdm.php';</script>";
    exit();

} else {

    // Trate o caso em que o ID é inválido
    // Por exemplo, redirecione para uma página de erro ou exiba uma mensagem
    var_dump($horarioId);
    echo "ID inválido";
}
?>