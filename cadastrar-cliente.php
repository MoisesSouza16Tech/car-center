<?php
    require_once 'global.php';
    require_once 'controller/clienteController.php';
    header('Location: form-cliente.php');

    try{
        
        $cliente = new Cliente();
        $cliente->setNomeCliente($_POST['Nome']);
        $cliente->setCpfCliente($_POST['cpf']);
        $cliente->setEmailCliente($_POST['email']);
        $cliente->setSenhaCliente($_POST['senha']);
        $cliente->setLogradouroCliente($_POST['rua']);
        $cliente->setNumLogCliente($_POST['numero']);
        $cliente->setCompCliente($_POST['complemento']);
        $cliente->setBairroCliente($_POST['bairro']);
        $cliente->setCidadeCliente($_POST['cidade']);
        $cliente->setUfCliente($_POST['estado']);
        $cliente->setCepCliente($_POST['cep']);
        $cliente->setTelefoneCliente($_POST['telefone']);


        $listacliente = Cliente::listar();

        $controller = new clienteController($cliente);

        if(!$controller->verificaCpf($cliente, $listacliente)){
            Cliente::cadastrar($cliente);
        }else{
            header('Location: form-cliente.php');
        }
    }
    
    catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }

    
    
?>