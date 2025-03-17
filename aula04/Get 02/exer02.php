<?php
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $n3 = $_GET['n3'];

    if ($n1 > $n2) {
        echo $n1," é maior que ",$n2;
    }

    elseif ($n1 > $n3) {
        echo $n1," é maior que ",$n3;
    }

    if ($n2 > $n3) {
        echo $n2," é maior que ",$n3;
    }

    if ($n2 > $n1) {
        echo $n2," é maior que ",$n1;
    }

    if ($n3 > $n2) {
        echo $n3," é maior que ",$n2;
    }

    if ($n3 > $n1) {
        echo $n3," é maior que ",$n1;
    }
    else {
        echo "Erro";
    }   

?>