<?php
    class ProdutoRepositorio{
        private $conn; //conexão com o BD

        public function __construct($conn){
            $this->conn = $conn;
        }
        public function cadastrar(Produto $produto){
            $sql = "INSERT INTO produtos (nome, plataforma, descricao, imagem, preco) VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("sssss", $produto->getNome(), $produto->getPlataforma(),
            $produto->getDescricao(), $produto->getImagem(), $produto->getPreco());
            $stmt->execute();
            $stmt->close();
        }
    }
?>