<?php
    abstract class Conexao{
        private $host;
        private $user;
        private $pass;
        private $dbName;

        function __construct()
        {
            $this->host="localhost";
            $this->user="root";
            $this->pass="";
            $this->dbName="pwb4bim";
        }
        
        function conectar()
        {
            try{
                $conn = new PDO("mysql:host=$this->host;dbname=$this->dbName",$this->user,$this->pass);
                return $conn;
                
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }

    }
?>