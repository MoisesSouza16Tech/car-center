<?php
    /*require_once "../models/Conexao.php";
    require_once "../models/marcaVeiculo.php";

    class marcaVeiculoDao{

        public static function cadastrar($marcaVeiculo){
            $conexao = Conexao::conectar();

            $queryInsert = "INSERT INTO tbmarcaveiculo(nomemarcaveiculo) VALUES (?)";

            $prepareStatement = $conexao->prepare($queryInsert);
            $prepareStatement->bindValue(1, $marcaVeiculo->getNomeMarcaVeiculo());

            $prepareStatement->execute();
        }

        public static function delete($marcaVeiculo){
            $conexao = Conexao::conectar();

            $queryDelete = "DELETE FROM tbmarcaveiculo WHERE idmarcaveiculo = ?";

            $prepareStatement = $conexao->prepare($queryDelete);
            $prepareStatement->bindValue(1, $marcaVeiculo->getIdMarcaVeiculo());

            $prepareStatement->execute();
        }

        public static function editar($marcaVeiculo){
            $conexao = Conexao::conectar();

            $queryUpdate = "UPDATE tbmarcaveiculo SET nomemarcaveiculo = ? WHERE idmarcaveiculo = ?";

            $prepareStatement = $conexao->prepare($queryUpdate);
            $prepareStatement->bindValue(1, $marcaVeiculo->setNomeMarcaVeiculo());
            $prepareStatement->bindValue(2, $marcaVeiculo->setIdMarcaVeiculo());

            $prepareStatement->execute();
        }

        public static function listar(){
            $conexao = Conexao::conectar();

            $querySelect = "SELECT idmarcaveiculo, nomemarcaveiculo FROM tbmarcaveiculo";

            $result = $conexao->prepare($querySelect);
            $result->execute();
            $lista = $result->fetchAll();

            return $lista;
        }
    }*/

?>