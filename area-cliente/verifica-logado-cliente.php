<?php
    // require_once "../dao/ClienteDao.php";
    // require_once("../model/Cliente.php");

    //require_once 'global.php';
    require_once("../models/Cliente.php");
    
    try {
        session_start();

        $cliente = new Cliente();
    
        $cliente->setEmailCliente($_SESSION['loginCliente']);
        $cliente->setSenhaCliente($_SESSION['senhaCliente']);

        $consultacliente = Cliente::consultarlogin($cliente);

        if($consultacliente == 0){
            header("Location: ./../index.php");
        }       

    } catch(Exception $e) {
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }
?>