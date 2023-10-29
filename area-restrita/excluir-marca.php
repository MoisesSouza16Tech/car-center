<?php
    require_once "../models/marcaVeiculo.php";
    require_once "../controller/marcaVeiculoController.php";

    /*require_once "global.php";*/

    header('Location: relatorio-marcas.php');

    $marcaVeiculo = new marcaVeiculo();
    //$categoria->setNomeCategoria($_POST['categoria-veiculo-edit']);
    $marcaVeiculo->setIdMarcaVeiculo($_POST['id-marca']);

    // $categoriaController = new categoriaController($categoria);

    $lista = marcaVeiculo::listar();
    marcaVeiculo::delete($marcaVeiculo);
?>
