<?php

    // require_once 'global.php';
    require_once '../models/ItemVenda.php';
    require_once '../models/veiculo.php';
    require_once '../models/Venda.php';


    header("Location: veiculos.php");

    $veiculo = new veiculo();
    $veiculo->setIdVeiculo($_GET['idveiculo']);
    $veiculo = veiculo::consultarDados($veiculo);

    $item = new ItemVenda();
    $item->setQtde(1);
    $item->setVeiculo($veiculo);
    $item->setSubtotal($item->getQtde() * $item->getVeiculo()->getPrecoVeiculo());

    if (isset($_COOKIE["carrinho"])){
        $carrinhorecebido =  $_COOKIE["carrinho"]; 
        $carrinhoAtual = unserialize($carrinhorecebido);

        $carrinhoAtual[] = $item;
        $carrinhocookie = serialize($carrinhoAtual);
        setcookie('carrinho', $carrinhocookie);
    }
    else{
        $carrinho = array();

        $carrinho[] = $item;
        
        $carrinhocookie = serialize($carrinho);
        setcookie('carrinho', $carrinhocookie);

    }

?>