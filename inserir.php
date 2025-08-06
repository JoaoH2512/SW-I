<?php
include "conexao.php";

$titulo = "Memórias Póstumas de Brás Cubas";
$autor = "Machado de Assis";
$ano = 1881;

$sql = "INSERT INTO livros (titulo, autor, ano) VALUES ('$titulo', '$autor', $ano)";

if (mysqli_query($conexao, $sql)) {
    echo "Livro inserido com sucesso!";
} else {
    echo "Erro: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>