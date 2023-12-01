<?php
//classe responsável pela conexão PDO com o localhost
    abstract class Conexao{
        //variáveis necessárias para a conexão
        private $host;
        private $user;
        private $pass;
        private $dbName;

        function __construct()
        {
            //instanciando as variáveis
            $this->host="localhost";
            $this->user="root";
            $this->pass="";
            $this->dbName="pwb4bim";
        }
        
        //função que retorna a conexão necessária para a execução das query's
        function conectar()
        {
            //try-catch para enxergar erro de conexão com o banco
            try{

                //conexão com o banco através do método PDO
                $conn = new PDO("mysql:host=$this->host;dbname=$this->dbName",$this->user,$this->pass);
                return $conn;
                
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }

    }
?>