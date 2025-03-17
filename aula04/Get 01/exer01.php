<?php
        $nome = $_GET['cxnome'];
        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        $n3 = $_GET['n3'];
        $media = ($n1 + $n2 + $n3) / 3;

        echo $nome,"A media dos numeros é: ",$media;

?>