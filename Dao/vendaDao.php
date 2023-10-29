<?php
    /*require_once "../models/Conexao.php";
    require_once "../models/venda.php";

    class vendaDao{
        public static function cadastrar($venda){
            $conexao = Conexao::conectar();

            $querySelect = "INSERT tbVenda(dataVenda, valorTotalVenda, statusVenda, idItemVenda, idcliente) VALUES (?,?,?,?,?)";
            
            $prepareStatement = $conexao->prepare($querySelect);
            $prepareStatement->bindValue(1, $venda->getDataVenda());
            $prepareStatement->bindValue(2, $venda->getValorTotalVenda());
            $prepareStatement->bindValue(3, $venda->getStatus());
            $prepareStatement->bindValue(4, $venda->getItemVenda()->getIdItemVenda());
            $prepareStatement->bindValue(5, $venda->getIdCliente()->getIdCliente());

            $prepareStatement->execute();
        }
        
        public static function inserirItem($venda, $itemVenda){
            $conexao = Conexao::conectar();

            $querySelect = "INSERT tbVenda(idItemVenda) VALUES(?)";
            $querySelect = "INSERT tbItemVenda(qtdeItemVenda, subTotalVenda) VALUES (?,?)";
            $prepareStatement = $conexao->prepare($querySelect);
            $prepareStatement->bindValue(1, $venda->getItemVenda()->getIdItemVenda());

            $prepareStatement->bindValue(1, $itemVenda->getQtdeItemVenda());
            $prepareStatement->bindValue(2, $itemVenda->getSubTotalItemVenda());

            $prepareStatement->execute();
        }

        public static function ExcluirItem($venda, $itemVenda){
            $conexao = Conexao::conectar();

            $queryDelete = "DELETE idItemVenda FROM tbVenda WHERE idItemvenda = ?";
            $queryDelete = "DELETE FROM tbItemVenda WHERE IdItemVenda = ?";

            $prepareStatement = $conexao->prepare($queryDelete);
            $prepareStatement->bindValue(1, $venda->getItemVenda()->getIdItemVenda());

            $prepareStatement->bindValue(1, $itemVenda->getIdItemVenda());

            $prepareStatement->execute();
        }

        public static function cancelar($venda){
            $conexao = Conexao::conectar();

            $queryDelete = "DELETE FROM tbVenda WHERE idVenda = ?";

            $prepareStatement = $conexao->prepare($queryDelete);
            $prepareStatement->bindValue(1, $venda->getIdVenda());

            $prepareStatement->execute();
        }

        public static function atualizarStatus($venda){
            $conexao = Conexao::conectar();

            $queryUpdate = "UPDATE tbVenda SET statusVenda = ?";

            $prepareStatement = $conexao->prepare($queryUpdate);
            $prepareStatement->bindValue(1, $venda->setStatusVenda());

            $prepareStatement->execute();
        }

        public static function listarTodas(){
            $conexao = Conexao::conectar();

            $querySelect = "SELECT idVenda, dataVenda, valorTotalVenda, statusVenda FROM tbVenda";

            $result = $conexao->prepare($querySelect);
            $result->execute();
            $lista = $result->fetchAll();

            return $lista;
        }

        public static function listarVenda(){
            $conexao = Conexao::conectar();

            $querySelect = "SELECT idVenda, dataVenda, valorTotalVenda, statusVenda FROM tbVenda";

            $result = $conexao->prepare($querySelect);
            $result->execute();
            $lista = $result->fetch();

            return $lista;
        }


    }*/

?>