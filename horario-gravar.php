<?php
// Inclui o arquivo que contém a definição da classe Usuario
require_once "model/Horario.php";

// Cria um novo objeto Usuario
$horario = new Horario ();

// Define as propriedades nome, cpf, email, senha e senhaConfirmar do objeto Usuario
// com os valores enviados pelo formulário

$horario->inicio = $_POST['inicio'];
$horario->fim = $_POST['fim'];
$horario->funcionamento = $_POST['funcionamento'];
$horario->linhaId = $_POST['linhaId'];

// Chama o método inserir() no objeto Usuario para inserir
// os dados do novo usuário no banco de dados

$horario->inserir();
echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href = 'horarioAdm.php';</script>";

?>

