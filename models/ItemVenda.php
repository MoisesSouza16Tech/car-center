<?php

    require_once 'veiculo.php';

    class ItemVenda{
        private $id, $qtde, $subtotal, $veiculo;

        public function __construct(){
            $this->veiculo = new veiculo();
        }

        public function setId($id){
            $this->id = $id;
        }

        public function setQtde($qtde){
            $this->qtde = $qtde;
        }

        public function setSubtotal($subtotal){
            $this->subtotal = $subtotal;
        }

        public function setVeiculo($veiculo){
            $this->veiculo = $veiculo;
        }

        public function getId(){
            return $this->id;
        }

        public function getQtde(){
            return $this->qtde;
        }

        public function getSubtotal(){
            return $this->subtotal;
        }

        public function getVeiculo(){
            return $this->veiculo;
        }

        //ARQUIVOS ITEMVENDADAO DA ANA

        public static function cadastrar($item, $idvenda){
            $conexao = Conexao::conectar();

            $queryInsert = "INSERT INTO tbitemvenda(idvenda, idveiculo, qtdeitemvenda, subtotalitemvenda)
                             VALUES(?,?,?,?)";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $idvenda);
            $prepareStatement->bindValue(2, $item->getVeiculo()->getIdVeiculo());
            $prepareStatement->bindValue(3, $item->getQtde());
            $prepareStatement->bindValue(4, $item->getSubTotal());

            $prepareStatement->execute();
            return 'Cadastrou';
        }

        public static function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT idvenda, idveiculo, qtdeitemvenda, subtotalitemvenda FROM tbitemvenda
            -- INNER JOIN tbcategoria ON tbitemvenda.idCliente = tbCliente.idCliente
            -- WHERE idCliente
            ";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }

        public static function contar(){
            // $conexao = Conexao::conectar();
            // $querySelect = "SELECT COUNT(idcliente) AS qtde FROM tbcliente";
            // $resultado = $conexao->query($querySelect);
            // $num = $resultado->fetchAll();
            // foreach ($num as $n)
            //     return $n['qtde'];   
        }

        public static function contarVeiculoVenda(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT idveiculo, COUNT(iditemvenda) AS qtde FROM tbitemvenda GROUP BY idveiculo ORDER BY qtde DESC";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            foreach ($lista as $cliente)
                return $cliente['idveiculo'];   
        }


    }

    
?>