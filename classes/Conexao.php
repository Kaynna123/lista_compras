<?php

class Conexao{ 

    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "mercado";
    private $conexao;

    public function conectar(){

        try {
            $this->conexao = new PDO(
                "mysql:host=$this->host:3307;dbname=$this->banco",
                $this->usuario,
                $this->senha,
                [
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
                ]
            );
            return $this->conexao;

        } catch (PDOException $erro) {
            die("Erro na conexão com o banco. ".$erro->getMessage());
        }
    }

}