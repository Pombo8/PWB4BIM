<?php
    class ProdutoVO{
        private $id;
        private $nome;
        private $desc;
        private $preco;
        private $lojaId;

        function __construct($nome,$desc,$preco,$lojaId)
        {
            $this->nome = $nome;
            $this->desc = $desc;
            $this->preco = $preco;
            $this->lojaId = $lojaId;
        }

        function getNome():String
        {
            return $this->nome;
        }
        function getDesc() :String
        {
            return $this->desc;
        }
        function getPreco() :float
        {
            return $this->preco;
        }
        function getLojaId() :int
        {
            return $this->lojaId;
        }
    }
?>