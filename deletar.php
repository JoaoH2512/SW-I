<?php
include "conexao.php";

$id = 1;

$sql = "DELETE FROM livros WHERE id = $id";

if (mysqli_query($conexao, $sql)) {
    echo "Livro deletado com sucesso!";
} else {
    echo "Erro ao deletar: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>