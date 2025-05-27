<?php
    include_once 'produto.class.php';


    $produto = new Produto("Carro", 20000, 10);


    $produto->adicionarEstoque(6);
    $produto->removerEstoque(4);


    $produto->mostrarDetalhes();
?>