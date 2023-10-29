<?php
    require_once "../models/categoria.php";

    /*require_once "global.php";*/

   header('Location: relatorio-categorias.php');

    $categoria = new categoria();
    //$categoria->setNomeCategoria($_POST['categoria-veiculo-edit']);
    $categoria->setIdCategoria($_POST['id-categoria']);

    // $categoriaController = new categoriaController($categoria);

    $lista = categoria::listar();
    categoria::delete($categoria);
    
?>
