<?php
    include ("../model/ProdutoVO.php");
    include ("../model/CriarModel.php");
    class CriarController{

        function criar($nome,$desc,$preco,$idLoja){
            $Produto = new ProdutoVO($nome,$desc,$preco,$idLoja);
            $Modelo = new CriarModel();
            $Modelo->inserir($Produto);
        }
        function listar(){
            $Modelo = new CriarModel();
            $Modelo->listar();
        }
        function deletar($id){
            $Modelo = new CriarModel();
            $Modelo->deletar($id);
        }
        function listAll($prompt){
            $Modelo = new CriarModel();
            $Modelo->listAll($prompt);
        }
        function atualizar($id,$nome,$desc,$preco,$idLoja){
            $Modelo = new CriarModel();
            $Modelo->atualizar($id,$nome,$desc,$preco,$idLoja);
        }
    }
?>