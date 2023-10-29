<?php

    require_once "Conexao.php";

    class marcaVeiculo{
        private int $idMarcaVeiculo;
        private $nomeMarcaVeiculo;

        public function setIdMarcaVeiculo($idMarcaVeiculo){
            $this->idMarcaVeiculo = $idMarcaVeiculo;
        }
        public function getIdMarcaVeiculo(){
            return $this->idMarcaVeiculo;
        }

        public function setNomeMarcaVeiculo($nomeMarcaVeiculo){
            $this->nomeMarcaVeiculo = $nomeMarcaVeiculo;
        }
        public function getNomeMarcaVeiculo(){
            return $this->nomeMarcaVeiculo;
        }

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
            $prepareStatement->bindValue(1, $marcaVeiculo->getNomeMarcaVeiculo());
            $prepareStatement->bindValue(2, $marcaVeiculo->getIdMarcaVeiculo());

            $prepareStatement->execute();
        }

        public static function listar(){
            $conexao = Conexao::conectar();

            $querySelect = "SELECT idmarcaveiculo, nomemarcaveiculo FROM tbmarcaveiculo
            ORDER BY idMarcaVeiculo DESC";

            $result = $conexao->prepare($querySelect);
            $result->execute();
            $lista = $result->fetchAll();

            return $lista;
        }
    }

?>