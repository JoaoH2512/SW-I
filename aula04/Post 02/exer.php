<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $dataNascimento = $_POST["dataNascimento"];
    $cartao = $_POST["cartao"];
    echo "Nome: $nome<br>";
    echo "E-mail: $email<br>";
    echo "Data de Nascimento: $dataNascimento<br>";
    echo "Cartão: $cartao<br>";
} else {
    echo "Erro.";
}
?>