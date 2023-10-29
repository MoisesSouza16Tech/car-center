<?php

    /*require_once "../models/Conexao.php";
    require_once "../models/categoria.php";

    class categoriaDao{

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
            $prepareStatement->bindValue(1, $categoria->getId());

            $prepareStatement->execute();
        }

        public static function editar($categoria){
            $conexao = Conexao::conectar();

            $queryUpdate = "UPDATE tbcategoria SET nomecategoria = ? WHERE idcategoria = ?";

            $prepareStatement = $conexao->prepare($queryUpdate);
            $prepareStatement->bindValue(1, $categoria->setNomeCategoria());
            $prepareStatement->bindValue(1, $categoria->setIdCategoria());

            $prepareStatement->execute();
        }

        public static function listar(){
            $conexao = Conexao::conectar();

            $querySelect = "SELECT idcategoria, nomecategoria FROM tbcategoria";

            $result = $conexao->prepare($querySelect);
            $result->execute();
            $lista = $result->fetchAll();

            return $lista;
        }
    }*/
?>
