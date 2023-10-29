<?php
    require_once "../models/marcaVeiculo.php";
    require_once "../controller/marcaVeiculoController.php";

    /*require_once "global.php";*/

    header('Location: relatorio-marcas.php');

    $marcaVeiculo = new marcaVeiculo();
    $marcaVeiculo->setNomeMarcaVeiculo($_POST['marca-veiculo-edit']);
    $marcaVeiculo->setIdMarcaVeiculo($_POST['id-marca']);

    $marcaveiculoController = new marcaVeiculoController($marcaVeiculo);
    
    $lista = marcaVeiculo::listar();

    if(!$marcaveiculoController->validaNome($marcaVeiculo, $lista)){
        marcaVeiculo::editar($marcaVeiculo);
    }
?>
