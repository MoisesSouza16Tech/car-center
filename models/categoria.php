<?php

    /*require_once "../global.php";*/
    require_once "Conexao.php";

    class categoria{
        private int $idCategoria;
        private $nomeCategoria;

        public function setIdCategoria($idCategoria){
            $this->idCategoria = $idCategoria;
        }
        public function getIdCategoria(){
            return $this->idCategoria;
        }

        public function setNomeCategoria($nomeCategoria){
            $this->nomeCategoria = $nomeCategoria;
        }
        public function getNomeCategoria(){
            return $this->nomeCategoria;
        }

        public static function cadastrar($categoria){
            $conexao = Conexao::conectar();

            $queryInsert = "INSERT INTO tbcategoria(nomeCategoria) VALUES (?)";

            $prepareStatement = $conexao->prepare($queryInsert);
            $prepareStatement->bindValue(1, $categoria->getNomeCategoria());

            $prepareStatement->execute();
        }

        public static function delete($categoria){
            $conexao = Conexao::conectar();

            $queryDelete = "DELETE FROM tbcategoria WHERE idcategoria = ?";

            $prepareStatement = $conexao->prepare($queryDelete);
            $prepareStatement->bindValue(1, $categoria->getIdCategoria());

            $prepareStatement->execute();
        }

        public static function editar($categoria){
            $conexao = Conexao::conectar();

            $queryUpdate = "UPDATE tbcategoria SET nomecategoria = ? WHERE idcategoria = ?";

            $prepareStatement = $conexao->prepare($queryUpdate);
            $prepareStatement->bindValue(1, $categoria->getNomeCategoria());
            $prepareStatement->bindValue(2, $categoria->getIdCategoria());

            $prepareStatement->execute();
        }

        public static function listar(){
            $conexao = Conexao::conectar();

            $querySelect = "SELECT idcategoria, nomecategoria FROM tbcategoria
            ORDER BY idCategoria DESC";

            $result = $conexao->prepare($querySelect);
            $result->execute();
            $lista = $result->fetchAll();

            return $lista;
        }
    }

?>