<?php
    // require_once("model/Cliente.php");
    // require_once "dao/ClienteDao.php";

    //equire_once 'global.php';

    require_once("models/Cliente.php");
    //require_once "dao/ClienteDao.php";

    $cliente = new Cliente();
    
    $cliente->setEmailCliente($_POST['login']);
    $cliente->setSenhaCliente($_POST['senha']);
    
    try {
        $consultacliente = Cliente::consultarlogin($cliente);

        if($consultacliente == 0){
            header("Location: form-cliente.php");
            
        }
        else{
            foreach($consultacliente as $cliente){
                header("Location: ./area-cliente/index-cliente.php");
                session_start();
                $_SESSION['idCliente'] = $cliente['idCliente'];
                $_SESSION['nomeCliente'] = $cliente['nomeCliente'];
                $_SESSION['loginCliente'] = $cliente['emailCliente'];
                $_SESSION['senhaCliente'] = $cliente['senhaCliente'];
            }
        }        
    } catch(Exception $e) {
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }
?>