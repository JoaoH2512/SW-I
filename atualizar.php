<?php
include "conexao.php";

$id = 1;
$novo_titulo = "Memórias Póstumas de Brás Cubas - Edição Antiga";

$sql = "UPDATE livros SET titulo = '$novo_titulo' WHERE id = $id";

if (mysqli_query($conexao, $sql)) {
    echo "Livro atualizado com sucesso!";
} else {
    echo "Erro ao atualizar: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>