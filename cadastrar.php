<?php
include("conexao.php");

$nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
$sobrenome = mysqli_real_escape_string($conn, trim($_POST['sobrenome']));
$usuario = mysqli_real_escape_string($conn, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conn, trim($_POST['senha']));
$relato = mysqli_real_escape_string($conn, trim($_POST['relato']));

$sql = "INSERT INTO cadastro (nome, sobrenome, usuario, senha, relato) VALUES ('$nome', '$sobrenome', '$usuario', '$senha', '$relato')";

if(!mysqli_query($conn,$sql))
{
    die("<br>Falha na inserção = $sql -><br>".mysqli_errno($conn)."->".mysqli_error($conn));
}
echo("<br>");
echo("Cadastro Efetuado!");
header('Location: index.html');

mysqli_close($conn);
?>