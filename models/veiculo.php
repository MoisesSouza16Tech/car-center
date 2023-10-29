<?php

    /*require_once 'global.php';*/
    require_once "Conexao.php";
    require_once "categoria.php";
    require_once "marcaVeiculo.php";


    class veiculo{
            private $idVeiculo;
            private $descricaoVeiculo;
            private $precoVeiculo;
            private $anoVeiculo;
            private $marcaVeiculo;
            private $categoria;
            private $fotoVeiculo;

            public function __construct(){
                $this->categoria = new categoria();

                $this->marcaVeiculo = new marcaVeiculo();
            }
    
            public function setIdVeiculo($idVeiculo){
                $this->idVeiculo = $idVeiculo;
            }
            public function getIdVeiculo(){
                return $this->idVeiculo;
            }
    
            public function setDescricaoVeiculo($descricaoVeiculo){
                $this->descricaoVeiculo= $descricaoVeiculo;
            }

            public function getDescricaoVeiculo(){
                return $this->descricaoVeiculo;
            }
            
            public function setPrecoVeiculo($precoVeiculo){
                $this->precoVeiculo = $precoVeiculo;
            }
            public function getPrecoVeiculo(){
                return $this->precoVeiculo;
            }

            public function setAnoVeiculo($anoVeiculo){
                $this->anoVeiculo = $anoVeiculo;
            }
            public function getAnoVeiculo(){
                return $this->anoVeiculo;
            }

            public function setMarcaVeiculo($marcaVeiculo){
                $this->marcaVeiculo = $marcaVeiculo;
            }
            public function getMarcaVeiculo(){
                return $this->marcaVeiculo;
            }
    
            public function setCategoria($categoria){
                $this->categoria = $categoria;
            }
            public function getCategoria(){
                return $this->categoria;
            }
            public function getFotoVeiculo(){
                return $this->fotoVeiculo;
            }
            public function setFotoVeiculo($fotoVeiculo){
                $this->fotoVeiculo = $fotoVeiculo;
            }
    
            public static function cadastrar($veiculo){
                $conexao = Conexao::conectar();
    
                $queryInsert = "INSERT INTO tbveiculo(descricaoVeiculo, precoVeiculo, anoVeiculo, 
                                 idmarcaVeiculo, idcategoria, fotoVeiculo) VALUES (?, ?, ?, ?, ?, ?)";
    
                $prepareStatement = $conexao->prepare($queryInsert);
                $prepareStatement->bindValue(1, $veiculo->getDescricaoVeiculo());
                $prepareStatement->bindValue(2, $veiculo->getPrecoVeiculo());
                $prepareStatement->bindValue(3, $veiculo->getAnoVeiculo());
                $prepareStatement->bindValue(4, $veiculo->getMarcaVeiculo()->getIdMarcaVeiculo());
                $prepareStatement->bindValue(5, $veiculo->getCategoria()->getIdCategoria());
                $prepareStatement->bindValue(6, $veiculo->getFotoVeiculo());


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
    
                $queryUpdate = "UPDATE tbveiculo SET descricaoVeiculo ? WHERE idveiculo = ?";
    
                $prepareStatement = $conexao->prepare($queryUpdate);
                $prepareStatement->bindValue(1, $veiculo->getDescricaoVeiculo());
                $prepareStatement->bindValue(2, $veiculo->getIdVeiculo());


                $prepareStatement->execute();
            }

            public static function listar(){
                $conexao = Conexao::conectar();
    
                    
                $querySelect = "SELECT idveiculo,  fotoVeiculo, descricaoVeiculo, nomecategoria, nomemarcaveiculo, anoveiculo, precoveiculo FROM tbveiculo
                INNER JOIN tbcategoria ON tbveiculo.idcategoria = tbcategoria.idcategoria
                INNER JOIN tbmarcaveiculo ON tbveiculo.idmarcaveiculo = tbmarcaveiculo.idmarcaveiculo
                ORDER BY idVeiculo DESC"
                ;
    
                $result = $conexao->prepare($querySelect);
                $result->execute();
                $lista = $result->fetchAll();
    
                return $lista;
            }

            public static function consultarDados($veiculo){
                $conexao = Conexao::conectar();
                $querySelect = "SELECT descricaoVeiculo, precoVeiculo, fotoVeiculo
                                 FROM tbveiculo WHERE idVeiculo = ".$veiculo->getIdVeiculo();
                $resultado = $conexao->query($querySelect);
                $lista = $resultado->fetchAll();
                foreach ($lista as $p){
                    $veiculo->setDescricaoVeiculo($p['descricaoVeiculo']);
                    $veiculo->setPrecoVeiculo($p['precoVeiculo']);
                    $veiculo->setFotoVeiculo($p['fotoVeiculo']);
                }
                return $veiculo;   
            }
    
            public static function contar(){
                $conexao = Conexao::conectar();
                $querySelect = "SELECT COUNT(idveiculo) AS qtde FROM tbveiculo";
                $resultado = $conexao->query($querySelect);
                $num = $resultado->fetchAll();
                foreach ($num as $n)
                    return $n['qtde'];   
            }

            public static function consultarId($veiculo){
                $conexao = Conexao::conectar();
                $querySelect = "SELECT idveiculo FROM tbveiculo WHERE descricaoVeiculo LIKE '".$veiculo->getDescricaoVeiculo()."'";
                $resultado = $conexao->query($querySelect);
                $lista = $resultado->fetchAll();
                foreach ($lista as $veiculo)
                    $id = $veiculo['idveiculo'];
                return $id;   
            }

            public static function atualizarFoto($veiculo){
                $conexao = Conexao::conectar();
    
                $queryInsert = "UPDATE tbveiculo
                                SET fotoveiculo = ?
                                WHERE idveiculo = ?";
                
                $prepareStatement = $conexao->prepare($queryInsert);
                
                $prepareStatement->bindValue(1, $veiculo->getFotoVeiculo());
                $prepareStatement->bindValue(2, $veiculo->getIdVeiculo());
    
                $prepareStatement->execute();
                return 'Atualizou';
            }
            
    }

?>