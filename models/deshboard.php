<?php

    /*require_once "../global.php";*/
    require_once "Conexao.php";

    class Dashboard{

        public static function countVeiculos(){
            $conexao = Conexao::conectar();

            $querySelect = "SELECT COUNT(idcategoriaVeiculo), AS 'desc-veiculo' FROM tbveiculo
            ORDER BY idCategoria DESC";

            $result = $conexao->prepare($querySelect);
            $result->execute();
            $lista = $result->fetchAll();

            return $lista;
        }

        public static function veiculoMaisCaro(){
            $conexao = Conexao::conectar();

            $querySelect = "SELECT MAX(idVeiculo) AS descricaoVeiculo FROM tbveiculo
            GROUP BY idVeiculo";

            $result = $conexao->prepare($querySelect);
            $result->execute();
            $lista = $result->fetchAll();

            return $lista;
        }
    }

?>