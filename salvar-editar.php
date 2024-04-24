<?php

$id = $_GET["id"];
$tipo = $_POST["tipo"];
$nome = $_POST["nome"];
$descricao =$_POST ["descricao"];
$imagem = $_POST["imagem"];
$preco = $_POST["preco"];

include "conexao.php";

$sql = "update produtos set tipo = '$tipo', nome = '$nome', descricao = '$descricao', imagem = '$imagem', preco = '$preco' where id=$id ";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);

header("location: admin.php");
?>