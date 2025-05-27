<?php 
    class Produto {
        private $Nome;
        private $Preco;
        private $Quantidade;

        public function __construct($nome, $preco = 0, $quantidade = 0) {
            $this->Nome = $nome;
            $this->Preco = $preco; 
            $this->Quantidade = $quantidade;
        }

        public function getNome() {
            return $this->Nome;
        }

        public function getPreco() {
            return $this->Preco;
        }

        public function getQuantidade() {
            return $this->Quantidade;
        }

        
        public function setNome($nome) {
            $this->Nome = $nome;
        }

        public function setPreco($preco) {
            $this->Preco = $preco;
        }


        public function adicionarEstoque($quantidade) {
            $this->Quantidade += $quantidade;
        }

        public function removerEstoque($quantidade) {
            if ($this->Quantidade >= $quantidade) {
                $this->Quantidade -= $quantidade;
            } else {
                echo "Estoque insuficiente para remover $quantidade unidades.<br>";
            }
        }

        public function mostrarDetalhes() {
            echo "Nome do Produto: " . $this->getNome() . "<br>";
            echo "Preço do Produto: R$ " . number_format($this->getPreco(), 2, ',', '.') . "<br>";
            echo "Quantidade do Produto: " . $this->getQuantidade() . "<br>";
        }
    }
?>