<?php 
// usa include_onde para conectar php com php, tipo um link de php pra php
    include_once 'Pessoa.classe.php';

    //Instancia de um objeto (uma pessoa)
    $pessoa1 =  new Pessoa;
    $pessoa2 =  new Pessoa;
    // o var dump mosta oq tem dentro da variavel de forma mais detalhada e o print_r de forma mais superficial
    //var_dump($pessoa1);
    

    //Atribuição de valores para o objeto
    $pessoa1->Nome = 'Fulano';
    $pessoa1->Altura= 1.85;
    $pessoa1->Peso = 85;
    
    $pessoa2->Nome = 'rafael';
    $pessoa2->Altura= 1.50;
    $pessoa2->Peso = 55;

    //chamando um metodo da classe
    $pessoa1->MostrarDados();
    $pessoa2->MostrarDados();




?>