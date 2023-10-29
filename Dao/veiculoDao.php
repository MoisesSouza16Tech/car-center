<?php
    /*require_once "../models/Conexao.php";
    require_once "../models/veiculo.php";

    class veiculoDao{

        public static function cadastrar($veiculo){
            $conexao = Conexao::conectar();

            $queryInsert = "INSERT INTO tbveiculo(descricaoVeiculo, precoVeiculo, anoVeiculo, 
                             idmarcaVeiculo, idcategoria) VALUES (?, ?, ?, ?, ?)";

            $prepareStatement = $conexao->prepare($queryInsert);
            $prepareStatement->bindValue(1, $veiculo->getDescricaoVeiculo());
            $prepareStatement->bindValue(2, $veiculo->getPrecoVeiculo());
            $prepareStatement->bindValue(3, $veiculo->getAnoVeiculo());
            $prepareStatement->bindValue(4, $veiculo->getMarcaVeiculo()->getIdMarcaVeiculo());
            $prepareStatement->bindValue(5, $veiculo->getCategoria()->getIdCategoria());

            $prepareStatement->execute();
        }

        public static function delete($veiculo){
            $conexao = Conexao::conectar();

            $queryDelete = "DELETE FROM tbveiculo WHERE idveiculo = ?";

            $prepareStatement = $conexao->prepare($queryDelete);
            $prepareStatement->bindValue(1, $veiculo->getIdVeiculo());

            $prepareStatement->execute();
        }

        public static function editar($veiculo){
            $conexao = Conexao::conectar();

            $queryUpdate = "UPDATE tbveiculo SET descricaoVeiculo = ?, precoveiculo = ?, 
                            anoveiculo = ?, idmarcaveiculo = ?, idcategoria = ?  WHERE idveiculo = ?";

            $prepareStatement = $conexao->prepare($queryUpdate);
            $prepareStatement->bindValue(1, $veiculo->setDescricaoVeiculo());
            $prepareStatement->bindValue(2, $veiculo->setIdVeiculo());
            $prepareStatement->bindValue(3, $veiculo->setPrecoVeiculo());
            $prepareStatement->bindValue(4, $veiculo->setAnoVeiculo());
            $prepareStatement->bindValue(5, $veiculo->setMarcaVeiculo()->setIdMarcaVeiculo());
            $prepareStatement->bindValue(6, $veiculo->setCategoria()->setIdCategoria());

            $prepareStatement->execute();
        }

        public static function listar(){
            $conexao = Conexao::conectar();

            $querySelect = "SELECT idveiculo, descricaoVeiculo, precoveiculo, anoveiculo, idmarcaveiculo, idcategoria FROM tbveiculo";

            $result = $conexao->prepare($querySelect);
            $result->execute();
            $lista = $result->fetchAll();

            return $lista;
        }
    }*/

?>