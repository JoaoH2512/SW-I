<?php
include "conexao.php";

$sql = "SELECT * FROM livros";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    while ($livro = mysqli_fetch_assoc($resultado)) {
        echo "ID: " . $livro["id"] . "<br>";
        echo "Título: " . $livro["titulo"] . "<br>";
        echo "Autor: " . $livro["autor"] . "<br>";
        echo "Ano: " . $livro["ano"] . "<br><hr>";
    }
} else {
    echo "Nenhum livro encontrado.";
}

mysqli_close($conexao);
?>