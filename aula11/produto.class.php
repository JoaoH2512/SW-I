<?php 
    class Produto{
        private $Nome;
        private $Preco;
        private $Quantidade;

        public function __construct($nome,$preco = 0, $quantidade = 0) {
            $this->Nome = $nome;
            $this->Preco = $preco; 
            $this->Quantidade = $quantidade;
        }
        // Getters
        public function getNome() {
            return $this->Nome;
        }
        public function getPreco() {
            return $this->Preco;
        }
        // Setters
        public function setNome() {
            $this->Nome;
        }
        public function setPreco() {
            $this->Preco;
        }
        

        public function adicionarEstoque($quantidade) {
            $this->Quantidade += $quantidade;
        }
        public function removerEstoque($quantidade) {
            $this->Quantidade -= $quantidade;
        }

        public function mostrarDetalhes() {
            echo "Nome do Produto: ". $produto->getNome() ."<br>";
            echo "Preço do Produto: ". $produto->getPreco() ."<br>";
            echo "Quantidade do Produto: ". $produto->getQuantidade() ."<br>";
        }





    }



?>