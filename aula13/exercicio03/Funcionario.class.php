<?php 

    class Funcionario{
        private $Nome;
        private $Salario;
        

        public function __construct($nome,$salario){
            $this->Nome = $nome;
            $this->Salario = $salario;

        }
        public function  AumentarSalario($porcentagem,$salario_atual) {
            $salario_atual = $this->getSalario();

            $salario_atual += $porcentagem;
            
        }

    }



?>