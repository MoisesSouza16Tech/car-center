<html>
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/car-favicon.png">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>CarCenter - Cadastro de Veículo</title>

	<!--
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">


	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />


	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />


	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />


	<link rel="stylesheet" href="css/font-awesome.min.css">

	<link type="text/css" rel="stylesheet" href="css/style.css" />-->
    <link rel="stylesheet" href="css/style-form.css">
    <link rel="stylesheet" href="css/estilo-preloader.css">
</head>

<body class="bg">
  <!-- início do preloader -->
  <div id="preloader">
    <div class="inner">
       <!-- HTML DA ANIMAÇÃO MUITO LOUCA DO SEU PRELOADER! -->
       <div class="bolas">
          <div></div>
          <div></div>
          <div></div>       
                       
       </div>
    </div>
</div>
<!-- fim do preloader --> 


<form class="form-cliente" action="confirmacao-cadastro.php" method="POST">
        <div class="content">
            <div class="form sign-in">
                <h2>Cadastro de Veículo</h2>
                <label style="float: left; margin-left: 15px;">
                    <span>Marca</span>
                    <input class="form-control" id="marca-veiculo" name="marca-veiculo" required="required" type="text" placeholder="aaa">
                </label>
                <label style="float: left; margin-left: 15px;">
                    <span>Modelo</span>
                    <input class="form-control" id="modelo-veiculo" name="modelo-veiculo" required="required" type="text" placeholder="modelo 123">
                </label>
                <br>
                <label style="float: left; margin-left: 15px;">
                    <span>Ano</span>
                    <input class="form-control" id="ano-veiculo" name="ano-veiculo" required="required" type="date">
                </label>
                <label style="float: left; margin-left: 15px;">
                    <span>Preço</span>
                    <input class="form-control" id="preco-veiculo" name="preco-veiculo" required="required" type="text" placeholder="R$ 00000,00">
                </label>
                
                <label style="widht: 80% !important; clear: left; margin-top: 9rem;">
                    <span>Tipo de Combustível</span>
                    <input class="form-control" id="combustivel-veiculo" name="combustivel-veiculo" required="required" type="text" placeholder="flex">
                </label>

                <button type="submit" class="submit" style="widht: 100%; ">Cadastrar</button>
                <p class="forgot-pass" class="esqueci-hover"><a href="index.php">Voltar</a></p>
               
            </div>
            <div class="sub-cont">
                <div class="img">
                    <!--IMAGEM DO FORM DIRETO NA CLASS "IMG"-->
                </div>
            </div>
        </div>
    </form>

    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>-->
    <script src="js/script.js"></script>

    <!--PRELOADER-->
    <script src="js/preloader.js"></script>
    
</body>

</html>
