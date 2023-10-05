<?php
    class Produto {
        private ?int $id;
        private string $plataforma;
        private string $nome;
        private string $descricao;
        private string $imagem;
        private string $preco;

        public function __construct(string $nome, string $plataforma, string $descricao, string $preco, string $imagem) {
            $this->nome = $nome;
            $this->plataforma = $plataforma;
            $this->descricao = $descricao;
            $this->preco = $preco;
            $this->imagem = $imagem;
            ;
        }


        /**
         * Get the value of id
         */
        public function getId(): ?int
        {
                return $this->id;
        }

        /**
         * Set the value of id
         */
        public function setId(?int $id): self
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of nome
         */
        public function getNome(): string
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome(string $nome): self
        {
                $this->nome = $nome;

                return $this;
        }
        /**
         * Get the value of descricao
         */
        public function getPlataforma(): string
        {
                return $this->plataforma;
        }

        /**
         * Set the value of descricao
         */
        public function setPlataforma(string $plataforma): self
        {
                $this->plataforma = $plataforma;

                return $this;
        }

        /**
         * Get the value of descricao
         */
        public function getDescricao(): string
        {
                return $this->descricao;
        }

        /**
         * Set the value of descricao
         */
        public function setDescricao(string $descricao): self
        {
                $this->descricao = $descricao;

                return $this;
        }
        public function getPreco(): string
        {
                return $this->preco;
        }

        /**
         * Set the value of preco
         */
        public function setPreco(string $preco): self
        {
                $this->preco = $preco;

                return $this;
        }

        /**
         * Get the value of imagem
         */
        public function getImagem(): string
        {
                return $this->imagem;
        }

        /**
         * Set the value of imagem
         */
        public function setImagem(string $imagem): self
        {
                $this->imagem = $imagem;

                return $this;
        }

        /**
         * Get the value of preco
         */
    }
?>