<?php
include_once("validador.php");
?>
<!DOCTYPE php>
<php lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="../img/cadeado.png">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Relatório - Clientes</title>

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
                        <li class="active">
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
                        <li>
                            <a href="form-venda.php"><span></span>Vendas</a>
                        </li>
                        <li>
                            <a href="../logout.php"><span></span>Sair</a>
                        </li>

                    </ul>

                </nav>


                <?php
                require_once '../models/cliente.php';
                try {
                    $listacliente = cliente::listar();
                } catch (Exception $e) {
                    echo '<pre>';
                    print_r($e);
                    echo '</pre>';
                    echo $e->getMessage();
                }
                ?>

                <!-- Page Content  -->
                <div id="content" class="p-4 p-md-5 pt-5">

                    <div style="width: 100%;">
                        <!-- Gráfico de pizza -->
                        <div style="width: 100%; margin-top: 15px;">


                            <!--Nome da class:
                            ftco-section-->
                            <section class="">
                                <div class="container-fluid" style="width: 100%;">
                                    <div class="row justify-content-center">
                                        <div class="col-md-6 text-center mb-5">
                                            <h2 class="heading-section">Histórico de Clientes Cadastrados</h2>
                                        </div>
                                    </div>
                                    <div class="row" style="width: 100%;">
                                        <div class="col-md-12">
                                            <div class="table-wrap">
                                                <table class="table table-striped text-center">
                                                    <thead class="thead-primary">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Nome</th>
                                                            
                                                            <th>Email</th>
                                                            <th>Rua</th>
                                                            <th>Nº</th>
                                                            <th>Complemento</th>
                                                            <th>Bairro</th>
                                                            <th>Cidade</th>
                                                            <th>UF</th>
                                                            <th>CEP</th>
                                                            <th>Telefone</th>
                                                           
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        for ($i = 0; $i < count(cliente::listar()); $i++) {
                                                            print("
																	<tr>
																		<td>" . cliente::listar()[$i][0] . "</td>
																		<td>" . cliente::listar()[$i][1] . "</td>
																		<td>" . cliente::listar()[$i][3] . "</td>
                                                                        <td>" . cliente::listar()[$i][5] . "</td>
																		<td>" . cliente::listar()[$i][6] . "</td>
                                                                        <td>" . cliente::listar()[$i][7] . "</td>
																		<td>" . cliente::listar()[$i][8] . "</td>
                                                                        <td>" . cliente::listar()[$i][9] . "</td>
																		<td>" . cliente::listar()[$i][10] . "</td>
                                                                        <td>" . cliente::listar()[$i][11] . "</td>
																		<td>" . cliente::listar()[$i][12] . "</td>
																		

																	</tr>
																	");
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
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