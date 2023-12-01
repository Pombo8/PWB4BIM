<?php
    include ("Conexao.php");
    //modelo - conexão direta com o banco (realiza as operações)
    class CriarModel extends Conexao{
        //função para a inserção de produto no banco de dados
        function inserir($Produto){
            //verificação de inserção/conexão
            try{
                //instanciando a conexão
                $conn= $this->conectar();

                //instanciando as variáveis do VO
                $nome = $Produto->getNome();
                $desc = $Produto->getDesc();
                $preco = $Produto->getPreco();
                $lojaId = $Produto->getLojaId();

                //query e confirmação de sucesso
                $sqlQuery ="INSERT INTO `produtos`(`nome`, `descricao`, `preco`, `loja_id`) VALUES('$nome','$desc',$preco,$lojaId)";
                $conn->exec($sqlQuery);
                echo "Item Inserido com Sucesso!";

            }   
            catch(PDOException $e){
                echo $e->getMessage();
                
            }
        }
        //função de listagem, responsável pelo VIEW do CRUD
        function listar(){
            
            //try-catch -verificar conexao/query 
            try{

                //instanciando a conexão com o banco
                $conn = $this->conectar();
                $query = $conn->prepare("SELECT * FROM produtos ORDER BY id");
                $query->execute();

                //realizando a função VIEW com um foreach e a função fetchAll() do PDO
                $result=$query->fetchAll();

                foreach($result as $row){
                    extract($row);
                    echo "Id: $id <br> Nome: $nome <br> Descrição: $descricao <br> Preço: $preco <br> Nº Loja: $loja_id";
                    echo "<hr>";
                }
                
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        //função de DELETE do CRUD a partir do id recebido
        function deletar($id){
            //try-catch verificar conexão/sucesso de query
            try{

                //instanciando a conexão
                $conn = $this->conectar();
                //execução query
                $query = $conn->prepare("DELETE FROM produtos WHERE id=$id");
                $query->execute ();

                //refresh page
                header("Refresh:0; url=./deletar.php");
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }

        }
        //função UPDATE do CRUD
        function atualizar($id,$nome,$desc,$preco,$idLoja){
            //try-catch verificar conexão/sucesso query
            try{
                //instanciando a conexão
                $conn = $this->conectar();
                //execução da query
                $query = $conn->prepare("UPDATE `produtos` SET `nome`='$nome',`descricao`='$desc',`preco`=$preco,`loja_id`=$idLoja WHERE id =$id");
                $query->execute();
                echo "Item Atualizado com Sucesso!";

            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        //função responsável por todas as listas com botão interativo nos objetos
        function listAll($prompt){
            try{
                //instanciando a conexão
                $conn = $this->conectar();

                //realização query
                $query = $conn->prepare("SELECT * FROM produtos ORDER BY id");
                $query->execute();
                $result=$query->fetchAll();

                //mostrando as listas/prompt(atualizar ou deletar, etc);
                foreach($result as $row){
                    extract($row);
                    echo "<form method='POST'>Id: $id <br> Nome: $nome <br> Descrição: $descricao <br> Preço: $preco <br> Nº Loja: $loja_id <br> <input type='hidden' value=$id name=hidden> <input type='submit' name='submit-button' value='$prompt'></form>";
                    echo "<hr>";
                }
                
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
?>