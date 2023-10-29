<?php
    /*require_once 'global.php';*/
    //require_once "Conexao.php";

    require_once 'cliente.php';
    require_once 'ItemVenda.php';

    class Venda{
        private $id, $data, $valortotal, $status, $cliente;
        /*
            Status da venda
            1    Pedido pelo cliente
            2   Confirmado pela loja
            3   Cancelado pelo cliente
            4   Cancelado pela loja – falta de estoque
            5   Venda finalizada – produtos enviados

        */

        // lista de itens da venda
        private $listaitemvenda = [];

        public function __construct(){
            $this->cliente = new Cliente();
        }

        public function getId(){
            return $this->id;
        }
        public function getValorTotal(){
            return $this->valortotal;
        }
        public function getData(){
            return $this->data;
        }
        public function getStatus(){
            return $this->status;
        }
        public function getCliente(){
            return $this->cliente;
        }
        public function getListaItem(){
            return $this->listaitemvenda;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function setValorTotal($valortotal){
            $this->valortotal = $valortotal;
        }
        public function setData($data){
            $this->data = $data;
        }
        public function setStatus($status){
            $this->status = $status;
        }
        public function setCliente($cliente){
            $this->cliente = $cliente;
        }
        public function setListaItem($listaitemvenda){
            $this->listaitemvenda = $listaitemvenda;
        }



        //ARQUIVOS DA VENDADAO DA ANA

        public static function cadastrar($venda){
            $conexao = Conexao::conectar();

            $queryInsert = "INSERT INTO tbvenda(datavenda, valortotalvenda, statusvenda, idcliente)
                             VALUES(?,?,?,?)";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $venda->getData());
            $prepareStatement->bindValue(2, $venda->getValorTotal());
            $prepareStatement->bindValue(3, $venda->getStatus());
            $prepareStatement->bindValue(4, $venda->getCliente()->getIdCliente());

            $prepareStatement->execute();
            return 'Cadastrou';
        }

        public static function consultarId($venda){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT MAX(idvenda) AS maior FROM tbvenda
                            WHERE idcliente = ".$venda->getCliente()->getIdCliente();
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            foreach ($lista as $venda)
                return $venda['maior'];   
        }

        public static function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT idvenda, DATE_FORMAT(datavenda, '%d/%m/%Y') AS datavenda, 
                            valortotalvenda, statusvenda, v.idcliente, nomecliente 
                            FROM tbvenda v INNER JOIN tbcliente c 
                            ON v.idcliente = c.idcliente 
                            ORDER BY datavenda DESC";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }

        public static function contar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT COUNT(idvenda) AS qtde FROM tbvenda";
            $resultado = $conexao->query($querySelect);
            $num = $resultado->fetchAll();
            foreach ($num as $n)
                return $n['qtde'];   
        }

        public static function contarClienteVenda(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT idcliente, COUNT(idvenda) AS qtde FROM tbvenda GROUP BY idcliente ORDER BY qtde DESC";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            foreach ($lista as $cliente)
                return $cliente['idcliente'];   
        }

        public static function atualizarStatus($venda){
            $conexao = Conexao::conectar();

            $queryInsert = "UPDATE tbvenda 
                            SET statusvenda = ?
                            WHERE idvenda = ?";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $venda->getStatus());
            $prepareStatement->bindValue(2, $venda->getId());

            $prepareStatement->execute();
            return 'Atualizou';
        }

        public static function contarPedido(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT COUNT(idvenda) AS qtde FROM tbvenda WHERE statusvenda = 1";
            $resultado = $conexao->query($querySelect);
            $num = $resultado->fetchAll();
            foreach ($num as $n)
                return $n['qtde'];   
        }

        public static function pedidosFinalizados(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT COUNT(idvenda) AS qtdef FROM tbvenda WHERE statusvenda = 5";
            $resultado = $conexao->query($querySelect);
            $num = $resultado->fetchAll();
            foreach ($num as $n)
                return $n['qtdef'];   
        }

        public static function listarPorCliente($cliente){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT idvenda, DATE_FORMAT(datavenda, '%d/%m/%Y') AS datavenda, 
                            valortotalvenda, statusvenda, v.idcliente, nomecliente 
                            FROM tbvenda v INNER JOIN tbcliente c 
                            ON v.idcliente = c.idcliente 
                            WHERE v.idcliente = ".$cliente->getIdCliente()."
                            ORDER BY datavenda DESC";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }
        
        public static function maiorVenda(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT MAX(valortotalvenda) AS Valor FROM tbvenda ";
            $resultado = $conexao->query($querySelect);
            $num = $resultado->fetchAll();
            foreach ($num as $n)
                return $n['Valor'];   
        }

        public static function clienteGastou(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT MAX(valortotalvenda) AS Valor FROM tbvenda";
            $resultado = $conexao->query($querySelect);
            $num = $resultado->fetchAll();
            foreach ($num as $n)
                return $n['Valor'];   
        }

    }

?>