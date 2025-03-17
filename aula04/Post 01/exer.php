<?php
    $login = $_POST['cxnome'];
    $senha = $_POST['senha'];

    if ($login == "etec" && $senha == "informatica") {
        echo "Logado com sucesso";
    }
    else {
        echo "Erro";
    }
?>