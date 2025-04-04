<?php
$email = $_POST['email'];
$senha = $_POST['senha'];
if ($email == 'gamer@gmail.com' && $senha == '1234') {
    // SEGUE PARA A PÁGINA privada.php
    $nome= "Gamer";
    header('Location: privada.php?nome='.$nome);
} else {
    // SEGUE PARA A PÁGINA erro.php
    header('Location: erro.php');
}
?>