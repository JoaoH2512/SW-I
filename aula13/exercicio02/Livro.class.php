<?php 

    class Livro{

        private $Titulo;
        private $Autor;
        private $Disponivel;

        public function __construct($t,$a,$d){
            
            $this->Titulo = $t;
            $this->Autor = $a;
            $this->Disponivel = $d;
            
        }

        public function getTitulo(){
            return $this->Titulo;
        }
        public function getDisponivel(){
            return $this->Disponivel;
        }


        public function Emprestar(){
            if ($this->getDisponivel() == true){
                $this->Disponivel = false;
            }else{
                echo "<br> O livro solicitado não está disponivel no momento.";
            }

            
        }
        public function Devolver(){
            $this->Disponivel = true; 
            echo "<br> Obrigado! Livro devolvido!";
            // valor boleano é true ou false
        }
        public function ExibirStatus(){

            $titulo_livro = $this->getTitulo();

            if($this->getDisponivel() == true){
                $status_livro = "Disponivel";

            }else{
                $status_livro = "Emprestado";
            }

            $resposta = "O livro ".$titulo_livro." está ".$status_livro;

            return  $resposta;
        }
    }


?>