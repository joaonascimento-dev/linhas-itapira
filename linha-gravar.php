<?php
// Inclui o arquivo que contém a definição da classe Usuario
require_once "model/Linha.php";

// Cria um novo objeto Usuario
$linha = new Linha ();

// Define as propriedades nome, cpf, email, senha e senhaConfirmar do objeto Usuario
// com os valores enviados pelo formulário
$linha->nome = $_POST['nome'];

// Chama o método inserir() no objeto Usuario para inserir
// os dados do novo usuário no banco de dados
$linha->inserir();
echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href = 'linhaAdm.php';</script>";

?>

