<?php
    require_once "../models/veiculo.php";
    // require_once "../controller/veiculoController.php";

    /*require_once "global.php";*/

    // header('Location: relatorio-produtos.php');

    // $veiculo = new veiculo();
    // $veiculo->setDescricaoVeiculo($_POST['desc-veiculo-edit']);
    // $veiculo->setIdVeiculo($_POST['id-veiculo']);


    //$marcaveiculoController = new marcaveiculoController($marcaVeiculo);

    // $lista = veiculo::listar();
    // veiculo::editar($veiculo);

//     /*if(!$marcaveiculoController->validaNome($marcaVeiculo, $lista)){
//         marcaVeiculo::cadastrar($marcaVeiculo);
//     }*/


//     $veiculo->setPrecoVeiculo($_POST['preco-veiculo']);
//     $veiculo->setAnoVeiculo($_POST['ano-veiculo']);


//     $categoria = new categoria();
//     $categoria->setIdCategoria($_POST['categoria-veiculo']);

//     $marcaVeiculo = new marcaVeiculo();
//     $marcaVeiculo->setIdMarcaVeiculo($_POST['marca-veiculo']);


//     $veiculo->setCategoria($categoria);
//     $veiculo->setMarcaVeiculo($marcaVeiculo);
//     //cadastrando produto sem a foto
 

// $veiculo->setIdVeiculo(veiculo::consultarId($veiculo));

// //nome original do arquivo no computador do usuário
// $nome = $_FILES['foto-veiculo']['name'];

// //para validações que possam ser necessárias, na nossa loja não será origatório
// $tipo =$_FILES['foto-veiculo']['type'];// exemplo image/gif
// $tamanho = $_FILES['foto-veiculo']['size']; // tamanho em bytes

// //nome temporário do arquivo como foi armazenado no servidor, é o ARQUIVO!!!
// $arquivo = $_FILES['foto-veiculo']['tmp_name'];

// $diretorio = "img/veiculos/";

// $extensao = substr($nome, -5);//pega o ponto e os 3 caracteres da extensão do arquivo
// $nomenovo = $veiculo->getIdVeiculo().$extensao;

// $nomecompleto =  $diretorio.$nomenovo;

// move_uploaded_file($arquivo, "../".$nomecompleto);

// $veiculo->setFotoVeiculo($nomecompleto);

// veiculo::atualizarFoto($veiculo);
?>
