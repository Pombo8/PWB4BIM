<?php
    //classe respectiva da entidade-tabela no banco dados
    //utilizada para um sistema mais organizado
    class ProdutoVO{
        //variáveis utilizadas-presentes na tabela Produto
        private $id;
        private $nome;
        private $desc;
        private $preco;
        private $lojaId;

        //instanciando o objeto para poder usar seus métodos depois
        function __construct($nome,$desc,$preco,$lojaId)
        {
            $this->nome = $nome;
            $this->desc = $desc;
            $this->preco = $preco;
            $this->lojaId = $lojaId;
        }

        //métodos GET para receber suas variáveis
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