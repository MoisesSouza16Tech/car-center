<?php
    require_once 'global.php';

    try{
        header('Location: area-restrita/relatorio-categorias.php');
        $categoria = new Categoria();
        $categoria->setNomeCategoria($_POST['categoria-veiculo']);
        echo $categoria->cadastrar($categoria);
    }
    catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }
?>