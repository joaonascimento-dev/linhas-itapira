<?php
// Inclui o arquivo que contém a definição da classe Usuario
require_once "model/Parada.php";

// Cria um novo objeto Usuario
$parada = new Parada();

$paradaId = isset($_POST['id']) ? $_POST['id'] : null;

// Define as propriedades nome, cpf, email, senha e senhaConfirmar do objeto Usuario
// com os valores enviados pelo formulário
$parada->nome = $_POST['nome'];
$parada->latitude = $_POST['latitude'];
$parada->longitude = $_POST['longitude'];
$parada->linhaId = $_POST['linhaId'];

if ($paradaId !== null) {

    $parada->id = $paradaId;

    // Chama o método excluir() no objeto Linha para remover a linha do banco de dados
    $parada->atualizar();
    echo "<script>alert('Atualização realizado com sucesso!'); window.location.href = 'paradaAdm.php';</script>";
    exit();

} else {

    // Trate o caso em que o ID é inválido
    // Por exemplo, redirecione para uma página de erro ou exiba uma mensagem
    echo "ID inválido";
}
?>