<?php
require_once __DIR__."/Conexao.php";


class Listas{
    
    private $conexao;
    public function __construct() {
        $banco_dados = new Conexao();
        $this->conexao = $banco_dados->conectar();
    }

    //exibir a lista
    public function exibirListas(){

        try {

            $select = "SELECT * FROM listas_compras ORDER BY id DESC ";
            $exe = $this->conexao->prepare($select);
            $exe -> execute();

            return $exe->fetchAll();
        } catch (PDOException $erro) {
            die("Erro ao exibir as Listas.".$erro->getMessage());
        }
    }
    
    //Criar lista
    public function criarListas($descricao){

        try {

            $insert = "INSERT INTO listas_compras (userd_id,descricao) VALUES(?, ?)";
            $exe = $this->conexao->prepare($insert);
            
            return $exe->execute(['0',$descricao]);
        } catch (PDOException $erro) {
            die("Erro ao criar Lista.".$erro->getMessage());
        }
    }

    //Excluir 
    public function excluir($id){

        try {

            $delete = "DELETE FROM listas_compras WHERE id=?";
            $exe = $this->conexao->prepare($delete);
            
            return $exe->execute([$id]);
        } catch (PDOException $erro) {
            die("Erro ao pagar as Listas.".$erro->getMessage());
        }
    }

    //buscar lista
    public function buscarLista($id){
        try {

            $buscar = "SELECT * FROM listas_compras WHERE id = ?";
            $exe = $this->conexao->prepare($buscar);
            $exe -> execute([$id]);

            return $exe->fetch();
        } catch (PDOException $erro) {
            die("Erro ao buscar as Listas.".$erro->getMessage());
        }
    }
    //ALTERAR LISTA
    public function alterar($descricao,$id){

        try {

            $alterar = "UPDATE listas_compras SET descricao=? WHERE id=?";
            $exe = $this->conexao->prepare($alterar);
            
            return $exe->execute([$descricao,$id]);
        } catch (PDOException $erro) {
            die("Erro ao alterar lista.".$erro->getMessage());
        }
    }


}
    