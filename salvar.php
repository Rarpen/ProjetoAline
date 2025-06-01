<?php
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$codigo = $_POST['codigo'];

// Linha no formato: codigo|nome|cpf|senha
$linha = "$codigo|$nome|$cpf|$senha\n";

// Salva no arquivo
file_put_contents("colaboradores.txt", $linha, FILE_APPEND);

echo "Colaborador cadastrado com sucesso!<br><a href='login.html'>Ir para o login</a>";
?>
