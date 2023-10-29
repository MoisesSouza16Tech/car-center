<?php
include_once("validador.php");
?>
<!DOCTYPE php>
<php lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="../img/car-favicon.png">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Relatório - Vendas</title>

        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />

        <!-- Slick -->
        <link type="text/css" rel="stylesheet" href="../css/slick.css" />
        <link type="text/css" rel="stylesheet" href="../css/slick-theme.css" />

        <!-- nouislider -->
        <link type="text/css" rel="stylesheet" href="../css/nouislider.min.css" />

        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="../css/font-awesome.min.css">

        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="../css/style.css" />


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/style-form.css">
        <link rel="stylesheet" href="../css/style-dashboard.css">
        <link rel="stylesheet" href="../css/style-table.css">
        <!-- php5 shim and Respond.js for IE8 support of php5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/php5shiv/3.7.3/php5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->


        <!-- Estilização do Modal de Edição e Exclusão -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>

    <body>
        <!-- HEADER -->
        <header>

            <!-- TOP HEADER 
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
						<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
					</ul>
				</div>
			</div>
			 /TOP HEADER -->
            <!-- Styles -->







            <div class="wrapper d-flex align-items-stretch" style=" border-bottom: 3px solid #D10024;">
                <nav id="sidebar">
                    <div class="custom-menu">
                        <button type="button" id="sidebarCollapse" class="btn btn-primary">
                            <i class="fa fa-bars" style="margin-left: 210px;"></i>
                            <span class="sr-only">Toggle Menu</span>
                        </button>
                    </div>
                    <h1><a href="../index.php" class="logo">ADM - CarCenter</a></h1>
                    <ul class="list-unstyled components mb-5">
                        <li>
                            <a href="adm-dashboard.php"><span></span> Dashboard</a>
                        </li>
                        <li>
                            <a href="relatorio-cliente.php"><span></span>Clientes</a>
                        </li>
                        <li>
                            <a href="relatorio-categorias.php"><span></span>Categoria</a>
                        </li>
                        <li>
                            <a href="relatorio-marcas.php"><span></span>Marcas</a>
                        </li>
                        <li>
                            <a href="relatorio-produtos.php"><span></span>Veículos</a>
                        </li>
                        <li class="active">
                            <a href="form-venda.php"><span></span>Vendas</a>
                        </li>
                        <li>
                            <a href="../logout.php"><span></span>Sair</a>
                        </li>

                    </ul>

                </nav>



                <!-- Page Content  -->
                <div id="content" class="p-4 p-md-5 pt-5">

                    <div style="width: 100%;">
                        <!-- Gráfico de pizza -->
                        <div style="width: 100%; margin-top: 15px;">


                            <!--Nome da class:
                            ftco-section-->
                            <section class="">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-6 text-center mb-5">
                                            <h2 class="heading-section">Histórico de Vendas</h2>
                                        </div>
                                    </div>

                                    <?php
                    require_once 'global.php';
                    try {
                        $listavenda = Venda::listar();
                        // $qtdePedido = Venda::contarPedido();
                        // $finalizados = Venda::pedidosFinalizados();
                        // $cancelados = Venda::pedidosCancelados();
                        // $listaitens = ItemVenda::listar();
                    } catch(Exception $e) {
                        echo '<pre>';
                            print_r($e);
                        echo '</pre>';
                        echo $e->getMessage();
                    }
                ?>


                                    <div class="row" style="width: 90%;">
                                        <div class="col-md-12">
                                            <div class="table-wrap">
                                                <table class="table table-striped">
                                                    <thead style="background: #D10024; color: white;">
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Data da Venda</th>
                                                            <th scope="col">Valor Total</th>
                                                            <th scope="col">Cliente</th>
                                                            <th scope="col">Ver itens</th>
                                                            <th scope="col" style="text-align: center; width: auto;">Status da Venda</th>
                                                            <th scope="col">Alterar Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
foreach($listavenda as $venda){ 
    switch($venda['statusvenda']){
        case 1: $status = 'Pedido pelo cliente'; break;
        case 2: $status = 'Confirmado pela loja'; break;
        case 3: $status = 'Cancelado pelo cliente'; break;
        case 4: $status = 'Cancelado pela loja – falta de estoque'; break;
        case 5: $status = 'Venda finalizada – produtos enviados'; break;                                    
    }
?>
                                                        <tr>
                                                            <th scope="row">
                                                                <?php echo $venda['idvenda']; ?>
                                                            </th>
                                                            <td>
                                                                <?php echo $venda['datavenda']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo number_format($venda['valortotalvenda'], 2, ',','.'); ?>
                                                            </td>
                                                            <td>
                                                            <?php echo $venda['nomecliente']; ?>
                                                            </td>
                                                            <td><button type="button" data-toggle="modal"
                                                                    data-target="#modalItensVenda"
                                                                    class="btn btn-primary"
                                                                    style="background: #D10024; width: auto; border-color: #D10024;"
                                                                    onclick="verItemVenda('<?php echo $venda['idvenda'];?>')">Ver
                                                                    itens</>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <?php echo $status; ?>
                                                            </td>
                                                            <?php
                                                                switch($venda['statusvenda']){
                                                                    case 1: 
                                                            ?>
                                                            <td><button type="button" data-toggle="modal"
                                                                    data-target="#modalStatusVenda"
                                                                    class="btn btn-primary"
                                                                    style="background: #D10024; width: auto; border-color: #D10024;"
                                                                    onclick="enviarIdVenda('<?php echo $venda['idvenda'];?>')">Alterar Status</button></td>
                                                            <?php

            break;
        case 2: case 3: case 4: case 5: echo ("<td></td>"); break;                                    
    }
?>

                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>






                                                <!-- Modal -->
                                                <div class="modal fade" id="modalStatusVenda" tabindex="-1"
                                                    role="dialog" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header"
                                                                style="background-color: #D10024;">
                                                                <h5 class="modal-title" id="ModalEdita"
                                                                    style="color: white; font-size: 16px; font-weight: bold;">
                                                                    Mudar Status da Venda</h5>
                                                                <button type="button" class="close" data-dismiss="modal" style="margin-top: -8px; width: auto;"
                                                                     aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="mudar-status-venda.php" method="post">
                                                                    <div class="modal-body">
                                                                        <div class="form-group"
                                                                            style="margin-top: 5px;">
                                                                            IdVenda:
                                                                            <input type="text" id="idvendaModal"
                                                                                name="idvendaModal" readonly>
                                                                            <br>
                                                                            <br>
                                                                            Status da venda:
                                                                            <select id="status" name="status" class="form-control">
                                                                                <!-- <option value="1">Pedido pelo cliente</option> -->
                                                                                <option value="2">Confirmado pela loja</option>
                                                                                <!-- <option value="3">Cancelado pelo cliente</option> -->
                                                                                <option value="4">Cancelado pela loja – falta de estoque</option>
                                                                                <option value="5">Venda finalizada – produtos enviados</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal"
                                                                    style="font-size:  13px; color: #fff; background-color: #6c757d; border-color: #6c757d; width: 40%; height: 40px;">Cancelar</button>

                                                                <button type='submit' class='btn btn-primary'
                                                                    style="font-size:  13px; color: #fff; background: #D10024;width: 40%;height: 40px; border-color: #D10024;"
                                                                    value="Alterar">Alterar</button>

                                                            </div>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>




                                                <!-- Modal -->
                                                <div class="modal fade" id="modalItensVenda" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header"
                                                                style="background-color: #D10024;">
                                                                <h5 class="modal-title" id="ModalEdita"
                                                                    style="color: white; font-size: 16px; font-weight: bold; color: white; font-size: 16px; display: flex; font-weight: bold; justify-content: center;">
                                                                    Ver Itens da Venda de Codígo: <div
                                                                        style="margin-left: 5px;" id="idvenda"></div>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" style="margin-top: -8px; width: auto;"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <table class="table table-striped"
                                                                    style="margin-bottom: 0px;">
                                                                    <thead style="background-color: #D10024">
                                                                        <tr style="background-color: #D1002">
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">Data da venda</th>
                                                                            <th scope="col">Total</th>
                                                                            <!-- <th scope="col">Subtotal</th> -->
                                                                            <!-- <th scope="col">Cliente</th> -->

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                                                                            <?php 
                                                                                foreach($listavenda as $venda){ 
                                                                                    switch($venda['statusvenda']){
                                                                                        case 1: $status = 'Pedido pelo cliente'; break;
                                                                                        case 2: $status = 'Confirmado pela loja'; break;
                                                                                        case 3: $status = 'Cancelado pelo cliente'; break;
                                                                                        case 4: $status = 'Cancelado pela loja – falta de estoque'; break;
                                                                                        case 5: $status = 'Venda finalizada – produtos enviados'; break;                                    
                                                                                    }
                                                                            ?>
                                                                        <tr>
                                                                            <th scope="row">
                                                                                <?php echo $venda['idvenda']; ?>
                                                                            </th>
                                                                            <td>
                                                                                <?php echo $venda['datavenda']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo number_format($venda['valortotalvenda'], 2, ',','.'); ?>
                                                                            </td>
                                                                            
                                                                        </tr>
                                                                        <?php } ?>
                                                                    </tbody>
                                                                </table>

                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal"
                                                                    style="font-size:  13px; color: #fff; background: #D10024;width: 40%;height: 40px; border-color: #D10024;">Fechar</button>

                                                            </div>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>





                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>

                    </div>

                </div>
            </div>







            <!-- jQuery Plugins -->

            <script>
                function monetario() {
                    atual = document.getElementById('inputPreco');
                    var f = atual.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
                    document.getElementById('inputPreco').value(f);
                }

                function readImage() {
                    if (this.files && this.files[0]) {
                        var file = new FileReader();
                        file.onload = function (e) {
                            document.getElementById("preview").src = e.target.result;
                        };
                        file.readAsDataURL(this.files[0]);
                    }
                }
                document.getElementById("foto").addEventListener("change", readImage, false);

                function enviarIdVenda(valor) {
                    document.getElementById('idvendaModal').value = valor;
                }

                function verItemVenda(valor) {
                    document.getElementById('idvenda').innerHTML = valor;

                }
            </script>

            <script src="../js/jquery.min.js"></script>
            <script src="..js/bootstrap.min.js"></script>
            <script src="../js/slick.min.js"></script>
            <script src=".//js/nouislider.min.js"></script>
            <script src=".//js/jquery.zoom.min.js"></script>
            <script src="../js/main.js"></script>

            <script src="../js/jquery-dashboard.min.js"></script>
            <script src="../js/popper.js"></script>
            <script src="../js/bootstrap-dashboard.min.js"></script>
            <script src="../js/main-dashboard.js"></script>

    </body>

</php>