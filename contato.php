<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

echo "<h2>Mensagem recebida com sucesso!</h2>";

echo "Nome: " . $nome . "<br>";
echo "Email: " . $email . "<br>";
echo "Mensagem: " . $mensagem;

?>