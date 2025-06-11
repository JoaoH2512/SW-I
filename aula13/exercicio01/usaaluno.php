<?php
    include_once 'Aluno.class.php';

    $fulano = new Aluno("João",10,9);

    $nota1 = $fulano->getNota1();
    $nota2 = $fulano->getNota2();
    //echo $nota1;
    $media = $fulano->CalculaMedia($nota1, $nota2);
    echo "ALUNO: ". $fulano->getNome();
    echo "<br>";
    echo "MÉDIA: " . $fulano->CalculaMedia($nota1, $nota2);
    echo "<br>";
    echo "SITUAÇÃO: ". $fulano-> VerificarSituacao($media);
    echo "<hr>";
    

    
?>