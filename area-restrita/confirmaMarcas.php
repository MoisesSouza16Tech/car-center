<?php
    header('Location: relatorio-marcas.php');
    require_once "../models/marcaVeiculo.php";
    require_once "../controller/marcaveiculoController.php";

    $marcaVeiculo = new marcaVeiculo();
    $marcaVeiculo->setNomeMarcaVeiculo($_POST['marca-veiculo']);

    $marcaveiculoController = new marcaveiculoController($marcaVeiculo);

    $lista = marcaVeiculo::listar();

    if(!$marcaveiculoController->validaNome($marcaVeiculo, $lista)){
        marcaVeiculo::cadastrar($marcaVeiculo);
    }
?>
