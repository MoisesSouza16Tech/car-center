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

        <title>ADM - DASHBOARD</title>

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
            <style>
                #chartdiv {
                    width: 100%;
                    height: 200px;
                }
            </style>

            <!-- Resources -->
            <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
            <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
            <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

            <!-- Chart code -->
            <script>
                am5.ready(function () {

                    // Create root element
                    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
                    var root = am5.Root.new("chartdiv");

                    // Set themes
                    // https://www.amcharts.com/docs/v5/concepts/themes/
                    root.setThemes([
                        am5themes_Animated.new(root)
                    ]);

                    // Create chart
                    // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
                    var chart = root.container.children.push(
                        am5percent.PieChart.new(root, {
                            endAngle: 270
                        })
                    );

                    // Create series
                    // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
                    var series = chart.series.push(
                        am5percent.PieSeries.new(root, {
                            valueField: "value",
                            categoryField: "category",
                            endAngle: 270
                        })
                    );

                    series.states.create("hidden", {
                        endAngle: -90
                    });

                    // Set data
                    // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
                    series.data.setAll([{
                        category: "Fiat Strada",
                        value: 501.9
                    }, {
                        category: "	VW Gol",
                        value: 301.9
                    }, {
                        category: "	HB20",
                        value: 201.1
                    }, {
                        category: "Onix",
                        value: 165.8
                    }, {
                        category: "Onix Plusa",
                        value: 139.9
                    }, {
                        category: "Volkswagen",
                        value: 128.3
                    }, {
                        category: "Chevrolet",
                        value: 99
                    }]);

                    series.appear(1000, 100);

                }); // end am5.ready()
            </script>


<?php
                    require_once '../models/cliente.php';
                    try {
                        $clienteCadastrados = Cliente::clienteCadastrados();
                        //$vendaMCara = VendaDao::maiorVenda();
                        //$gastou = VendaDao::clienteGastou();
                    } catch(Exception $e) {
                        echo '<pre>';
                            print_r($e);
                        echo '</pre>';
                        echo $e->getMessage();
                    }
                ?>



    </section>

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
                        <li class="active">
                            <a href="#"><span></span> Dashboard</a>
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
                        <li>
                            <a href="form-venda.php"><span></span>Vendas</a>
                        </li>
                        <li>
                            <a href="../logout.php"><span></span>Sair</a>
                        </li>

                    </ul>

                </nav>

                <!-- Page Content  -->
                <div id="content" class="p-4 p-md-5 pt-5">

                    <div style="width: 80%;  height: 300px;">


                        <div style="width: 100%;">
                            <!-- Gráfico de pizza -->
                            <div style="width: 100%; margin-top: 15px;">

                            <!-- <div class="boxes">

<div class="box box1">
<ion-icon name="person-outline"></ion-icon>
    <span class="text">Quantidade Clientes cadastrado</span>
    <span class="number"><?php echo $clienteCadastrados; ?> clientes</span>
</div>

</div>

<div class="box box2">
                        <ion-icon name="cash-outline"></ion-icon>
                        <span class="text">Venda Mais Cara</span>
                        <span class="number"><?php echo $gastou; ?> reais</span>
                    </div>
                    
                    <div class="box box3">
                        <ion-icon name="happy-outline"></ion-icon>
                        <span class="text">Cliente que Mais Gastou</span>
                        <span class="number"><?php echo $vendaMCara; ?> </span>
                    </div> -->

                                <div style=" padding-left: 10%; padding-right: 10%; text-align: justify;">

                                    <h2 style="text-align: center;">Veículos Mais Vendidos</h2>
                                </div>
                            </div>
                            <div style="width: 100%; " id="chartdiv"></div>
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