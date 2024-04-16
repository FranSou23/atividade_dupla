<?php

$tipo = $_GET["tipo"];
$nome = $_GET["nome"];
$descricao = $_GET["descricao"];
$imagem = $_GET["imagem"];
$preco = $_GET["preco"];

include "conexao.php";

$sql = "insert into produtos(tipo , nome , descricao , imagem , preco) values('$tipo','$nome', '$descricao' , '$imagem' , '$preco')";


$resultado = mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: index.php");
?>
