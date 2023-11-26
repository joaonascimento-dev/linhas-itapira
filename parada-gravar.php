<?php
// Inclui o arquivo que contém a definição da classe Usuario
require_once "model/Parada.php";

// Cria um novo objeto Usuario
$parada = new Parada ();

// Define as propriedades nome, cpf, email, senha e senhaConfirmar do objeto Usuario
// com os valores enviados pelo formulário

$parada->nome = $_POST['nome'];
$parada->latitude = $_POST['latitude'];
$parada->longitude = $_POST['longitude'];
$parada->linhaId = $_POST['linhaId'];

// Chama o método inserir() no objeto Usuario para inserir
// os dados do novo usuário no banco de dados

$parada->inserir();
echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href = 'paradaAdm.php';</script>";

?>

