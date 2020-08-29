<?php

class Conexao{

    function connection(){
        try {
            $conn = new PDO("mysql:host=localhost;dbname=memesalva","root","");
            return $conn;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
  
}


$conexao = new Conexao();
$conexao->connection();