<?php
/*require_once "../models/Conexao.php";
require_once "../models/cliente.php";

class clienteDao
{
    public static function cadastrar($cliente)
    {
        $conexao = Conexao::conectar();

        $prepareStatement = $conexao->prepare("INSERT INTO tbcliente(nomeCliente, cpfCliente, emailCliente,
                                                        senhaCliente, logradouroCliente, numLogCliente, compCliente, 
                                                        bairroCliente, cidadeCliente, ufCliente, cepCliente, 
                                                        telefoneCliente)
                                                        VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");

        $prepareStatement->bindValue(1, $cliente->getNomeCliente());
        $prepareStatement->bindValue(2, $cliente->getCpfCliente());
        $prepareStatement->bindValue(3, $cliente->getEmailCliente());
        $prepareStatement->bindValue(4, $cliente->getSenhaCliente());
        $prepareStatement->bindValue(5, $cliente->getLogradouroCliente());
        $prepareStatement->bindValue(6, $cliente->getNumLogCliente());
        $prepareStatement->bindValue(7, $cliente->getCompCliente());
        $prepareStatement->bindValue(8, $cliente->getBairroCliente());
        $prepareStatement->bindValue(9, $cliente->getCidadeCliente());
        $prepareStatement->bindValue(10, $cliente->getUfCliente());
        $prepareStatement->bindValue(11, $cliente->getCepCliente());
        $prepareStatement->bindValue(12, $cliente->getTelefoneCliente());
        $prepareStatement->execute();
    }

    public static function deletar($cliente)
    {
        $conexao = Conexao::conectar();

        $queryDelete = ("DELETE FROM tbCliente WHERE idCliente = ?");

        $prepareStatement = $conexao->prepare($queryDelete);
        $prepareStatement->bindValue(1, $cliente->getIdCliente());

        $prepareStatement->execute();
    }

    public static function editar($cliente)
    {
        $conexao = Conexao::conectar();

        $queryUpdate = ("UPDATE tbCliente SET nomeCliente = ?, cpfCliente = ?, emailCliente = ?, senhaCliente = ?
                                logradouroCliente = ?, numLogCliente = ?, compCliente = ?, bairroCliente = ?, cidadeCliente = ?
                                ufCliente = ?, cepCliente = ?, telefoneCliente = ?");

        $prepareStatement = $conexao->prepare($queryUpdate);
        $prepareStatement->bindValue(1, $cliente->setNomeCliente());
        $prepareStatement->bindValue(2, $cliente->setCpfCliente());
        $prepareStatement->bindValue(3, $cliente->setEmailCliente());
        $prepareStatement->bindValue(4, $cliente->setSenhaCliente());
        $prepareStatement->bindValue(5, $cliente->setLogradouroCliente());
        $prepareStatement->bindValue(6, $cliente->setNumLogCliente());
        $prepareStatement->bindValue(7, $cliente->setCompCliente());
        $prepareStatement->bindValue(8, $cliente->setBairroCliente());
        $prepareStatement->bindValue(9, $cliente->setCidadeCliente());
        $prepareStatement->bindValue(10, $cliente->setUfCliente());
        $prepareStatement->bindValue(11, $cliente->setCepCliente());
        $prepareStatement->bindValue(12, $cliente->setTelefoneCliente());

        $prepareStatement->execute();
    }

    public static function listar()
    {
        $conexao = Conexao::conectar();

        $querySelect = ("SELECT idCliente, nomeCliente, cpfCliente, emailCliente, senhaCliente, logradouroCliente, numLogCliente, compCliente, bairroCliente, cidadeCliente, ufCliente, cepCliente, telefoneCliente FROM tbCliente");

        $result = $conexao->prepare($querySelect);
        $result->execute();
        $lista = $result->fetchAll();

        return $lista;
    }
}*/
?>
