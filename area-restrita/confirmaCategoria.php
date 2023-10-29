 <?php
    header('Location: relatorio-categorias.php');
    require_once "../models/categoria.php";
    /*require_once "global.php";*/
    require_once "../controller/categoriaController.php";

    $categoria = new categoria();
    $categoria->setNomeCategoria($_POST['categoria-veiculo']);

    $categoriaController = new categoriaController($categoria);

    $lista = categoria::listar();

    if(!$categoriaController->validaNome($categoria, $lista)){
        categoria::cadastrar($categoria);
    }
?>
