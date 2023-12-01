<?php
//chamando as classes necessárias para o funcionamento do controller
    include ("../model/ProdutoVO.php");
    include ("../model/CriarModel.php");
    class CriarController{
        //função criar que realiza o CREATE do CRUD
        function criar($nome,$desc,$preco,$idLoja){
            //instanciando um ProdutoVO para uma inserção coerente e organizada
            $Produto = new ProdutoVO($nome,$desc,$preco,$idLoja);

            //instanciando Modelo e chamando seu método
            $Modelo = new CriarModel();
            $Modelo->inserir($Produto);
        }

        //função que realiza o VIEW do CRUD
        function listar(){

            //instanciando modelo e chamando método listar()
            $Modelo = new CriarModel();
            $Modelo->listar();
        }

        //função que realiza o DELETE do CRUD
        function deletar($id){

            //instanciando o modelo e chamando o método deletar()
            $Modelo = new CriarModel();
            $Modelo->deletar($id);
        }
        //função que realiza todas as listagens com botões de ação
        //update/delete
        function listAll($prompt){

            //instanciando e chamando o método listall()
            $Modelo = new CriarModel();
            $Modelo->listAll($prompt);
        }

        //função que realiza o UPDATE do CRUD
        function atualizar($id,$nome,$desc,$preco,$idLoja){

            //instanciando o model e chamando seu método
            $Modelo = new CriarModel();
            $Modelo->atualizar($id,$nome,$desc,$preco,$idLoja);
        }
    }
?>