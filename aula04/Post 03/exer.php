<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $cor = $_POST["cor"];
    echo "<body style='background-color: $cor'>";
    echo "Cor de fundo alterada para $cor.";
    echo "</body>";
} else {
    echo "Erro.";
}
?>