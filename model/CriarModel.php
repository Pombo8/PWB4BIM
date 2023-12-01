<?php
    include ("Conexao.php");
    class CriarModel extends Conexao{

        function inserir($Produto){
            try{
                $conn= $this->conectar();
                $nome = $Produto->getNome();
                $desc = $Produto->getDesc();
                $preco = $Produto->getPreco();
                $lojaId = $Produto->getLojaId();
                $sqlQuery ="INSERT INTO `produtos`(`nome`, `descricao`, `preco`, `loja_id`) VALUES('$nome','$desc',$preco,$lojaId)";
                $conn->exec($sqlQuery);
                echo "Item Inserido com Sucesso!";

            }   
            catch(PDOException $e){
                echo $e->getMessage();
                
            }
        }
        function listar(){
            try{
                $conn = $this->conectar();
                $query = $conn->prepare("SELECT * FROM produtos ORDER BY id");
                $query->execute();
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
        function deletar($id){
            try{
            $conn = $this->conectar();
            $query = $conn->prepare("DELETE FROM produtos WHERE id=$id");
            $query->execute ();
            header("Refresh:0; url=./deletar.php");
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }

        }
        function atualizar($id,$nome,$desc,$preco,$idLoja){
            try{
                $conn = $this->conectar();
                $query = $conn->prepare("UPDATE `produtos` SET `nome`='$nome',`descricao`='$desc',`preco`=$preco,`loja_id`=$idLoja WHERE id =$id");
                $query->execute();
                echo "Item Atualizado com Sucesso!";

            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        function listAll($prompt){
            try{
                $conn = $this->conectar();
                $query = $conn->prepare("SELECT * FROM produtos ORDER BY id");
                $query->execute();
                $result=$query->fetchAll();

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