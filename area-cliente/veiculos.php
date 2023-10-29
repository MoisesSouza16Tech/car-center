<?php include_once 'verifica-logado-cliente.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../img/car-favicon.png">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>CarCenter - Suvs</title>

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

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
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

		<!-- MAIN HEADER -->
		<div id="header">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- LOGO -->
					<div class="col-md-3">
						<div class="header-logo">
							<a href="#" class="logo">
								<img src="../img/logo-carcenter.png" alt="">
							</a>
						</div>
					</div>
					<!-- /LOGO -->

					<?php
												require_once '../models/categoria.php';
												try {
													$listacategoria = categoria::listar();
												} catch (Exception $e) {
													echo '<pre>';
													print_r($e);
													echo '</pre>';
													echo $e->getMessage();
												}
												?>

					<!-- SEARCH BAR -->
					<div class="col-md-6">
						<div class="header-search">
							<form>
								<select class="input-select">
									<option value="0">Categorias...</option>
									<?php foreach ($listacategoria as $categoria) { ?>
										<option value="<?php echo $categoria['idcategoria']; ?>">
											<?php echo  $categoria['nomecategoria']; ?>
										</option>
									<?php } ?>
								</select>
								<input class="input" placeholder="Pesquisar">
								<button class="search-btn">Pesquisar</button>
							</form>
						</div>
					</div>
					<!-- /SEARCH BAR -->

<!-- ACCOUNT -->
					
					<div class="col-md-3 clearfix">
						<div class="header-ctn">
							<!-- Wishlist -->
							<div class="opcoeslogin">
							<a href="#">
									<img src="../img/icone-login.png" style="height: 25px; display: inline-block;">
									<!--<span>Entrar/Cadastrar</span>--><br>
									<span>Olá, <?php 
									$Nome = $_SESSION['nomeCliente'];
									$primeiroNome = explode(" ", $Nome);
									echo $primeiroNome[0];  ?></span>
									
								</a>
								
							</div>

							<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>



							<!--/Wishlist-->

							<?php
                            if (isset($_COOKIE["carrinho"])){
                                $carrinhorecebido =  $_COOKIE["carrinho"]; 
                                $carrinhoAtual = unserialize($carrinhorecebido);
                                $qtdecarrinho = count($carrinhoAtual);
                            }
                            else{
                                $qtdecarrinho = 0;
                            }
                        ?>

							<!-- Cart -->
							<div class="dropdown" title="Conferir Carrinho">
								<a href="ver-carrinho.php" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<a href="ver-carrinho.php" > <i class="fa fa-shopping-cart"></i>
									<span>Carrinho</span>
									<div class="qty"><?php echo $qtdecarrinho;?></div></a>
								</a>
								
							</div>
							<!-- /Cart -->
							
							<!-- Sair-->
							<a href="logout.php"><button class="rd-navbar-basket"><i class="fa fa-sign-out" aria-hidden="true" id="logout"> </i></i></button> </a>


							<!-- Menu Toogle -->
							<div class="menu-toggle">
								<a href="#">
									<i class="fa fa-bars"></i>
									<span>Menu</span>
								</a>
							</div>
							<!-- /Menu Toogle -->
						</div>
					</div>
					<!-- /ACCOUNT -->
				</div>
				<!-- row -->
			</div>
			<!-- container -->
		</div>
		<!-- /MAIN HEADER -->

	</header>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<nav id="navigation">
		<!-- container -->
		<div class="container">
			<!-- responsive-nav -->
			<div id="responsive-nav">
				<!-- NAV -->
				<ul class="main-nav nav navbar-nav">
					<li><a href="index-cliente.php">Home</a></li>
					<li class="active"><a href="veiculos.php">Veículos</a></li>
					<li><a href="compras-cliente.php">Minhas Compras</a></li>
					<li><a href="quem-somos.php">Quem Somos</a></li>
					<li><a href="contato.php">Contato</a></li>
					<!--<li><a href="#">Accessories</a></li>/-->
				</ul>
				<!-- /NAV -->
			</div>
			<!-- /responsive-nav -->
		</div>
		<!-- /container -->
	</nav>
	<!-- /NAVIGATION -->



	<!-- container -->
	<div class="container">
		<div id="aside" class="col-md-3">
									<!-- aside Widget -->
			<div class="aside">

			<?php
												require_once '../models/categoria.php';
												try {
													$listacategoria = categoria::listar();
												} catch (Exception $e) {
													echo '<pre>';
													print_r($e);
													echo '</pre>';
													echo $e->getMessage();
												}
												?>			

				<h3 class="aside-title">Categorias</h3>
				<div class="checkbox-filter">
					<div class="select" >
						<select style="color: black; width: 100%; border-radius: 3px; border: solid lightgrey 1px; outline: none; ">
						<option selected class="estilo-lista-select" >Escolher..</option>

						<?php foreach ($listacategoria as $categoria) { ?>
							<option class="estilo-lista-select" value="<?php echo $categoria['idcategoria']; ?>">
								<?php echo  $categoria['nomecategoria']; ?>
							</option>
						<?php } ?>
						</select>
					</div>
				</div>
			</div>
			<!-- /aside Widget -->

			<!--<div class="aside">
				<h3 class="aside-title">Categorias</h3>
				<div class="checkbox-filter">

					<div class="input-checkbox">
						<input type="checkbox" id="category-1">
						<label for="category-1">
							<span></span>
							Laptops
							<small>(120)</small>
						</label>
					</div>

					<div class="input-checkbox">
						<input type="checkbox" id="category-2">
						<label for="category-2">
							<span></span>
							Smartphones
							<small>(740)</small>
						</label>
					</div>

					<div class="input-checkbox">
						<input type="checkbox" id="category-3">
						<label for="category-3">
							<span></span>
							Cameras
							<small>(1450)</small>
						</label>
					</div>

					<div class="input-checkbox">
						<input type="checkbox" id="category-4">
						<label for="category-4">
							<span></span>
							Accessories
							<small>(578)</small>
						</label>
					</div>

					<div class="input-checkbox">
						<input type="checkbox" id="category-5">
						<label for="category-5">
							<span></span>
							Laptops
							<small>(120)</small>
						</label>
					</div>

					<div class="input-checkbox">
						<input type="checkbox" id="category-6">
						<label for="category-6">
							<span></span>
							Smartphones
							<small>(740)</small>
						</label>
					</div>
				</div>
			</div>-->
			<!-- /aside Widget -->

			<!-- aside Widget -->
			<div class="aside">
				<h3 class="aside-title">Preço</h3>
				<div class="price-filter">
					<div id="price-slider" class="noUi-target noUi-ltr noUi-horizontal">
						
					</div>
					<div class="input-number price-min">
						<input id="price-min" type="number">
						<span class="qty-up">+</span>
						<span class="qty-down">-</span>
					</div>
					<span>-</span>
					<div class="input-number price-max">
						<input id="price-max" type="number">
						<span class="qty-up">+</span>
						<span class="qty-down">-</span>
					</div>
				</div>
			</div>
			<!-- /aside Widget -->

			<?php
												require_once '../models/marcaVeiculo.php';
												try {
													$listamarcas = marcaVeiculo::listar();
												} catch (Exception $e) {
													echo '<pre>';
													print_r($e);
													echo '</pre>';
													echo $e->getMessage();
												}
												?>

			<!-- aside Widget -->
			<div class="aside">
				<h3 class="aside-title">Marcas</h3>
				<div class="checkbox-filter">
					<div class="select">
					<select style="color: black; width: 100%; border-radius: 3px; border: solid lightgrey 1px; outline: none; ">
							<option selected class="estilo-lista-select">Escolher...</option>
							<?php foreach ($listamarcas as $marcaVeiculo) { ?>
							<option class="estilo-lista-select" value="<?php echo $marcaVeiculo['idmarcaveiculo']; ?>">
								<?php echo  $marcaVeiculo['nomemarcaveiculo']; ?>
							</option>
							<?php } ?>
						</select>
					</div>
				</div>
			</div>
			<!-- /aside Widget -->


		</div>
		<!-- row -->
		<div class="row">
			<!-- STORE 
				<div id="store" class="col-md-9">-->
			<!-- store top filter -->
			<div class="store-filter clearfix" style="display: flex;">
				<div class="store-sort">
					<!--<label>
								Sort By:
								<select class="input-select">
									<option value="0">Popular</option>
									<option value="1">Position</option>
								</select>
							</label>

							<label>
								Show:
								<select class="input-select">
									<option value="0">20</option>
									<option value="1">50</option>
								</select>
							</label>
						</div>
						<ul class="store-grid">
							<li class="active"><i class="fa fa-th"></i></li>
							<li><a href="#"><i class="fa fa-th-list"></i></a></li>
						</ul>
					</div>
					 /store top filter -->
					 <?php
            require_once '../models/veiculo.php';
            try {
                $listaveiculo = veiculo::listar();
            } catch(Exception $e) {
                echo '<pre>';
                    print_r($e);
                echo '</pre>';
                echo $e->getMessage();
            }
        ?>

					<!-- store products -->
					<div class="row">
					<?php foreach($listaveiculo as $veiculo){ ?>
						<!-- product -->
						<div class="col-md-4 col-xs-6">
							<div class="product">
								<div class="product-img">
									<img src="../<?php echo $veiculo['fotoVeiculo']; ?>" style="max-width: 100%; height: 20rem; object-fit: cover; object-position: left right;"  alt="<?php echo $veiculo['descricaoVeiculo']; ?>"
										alt="">
									<div class="product-label">
										<span class="sale">-30%</span>
										<span class="new">NEW</span>
									</div>
								</div>
								<div class="product-body">
									<p class="product-category"><?php echo $veiculo['nomecategoria']; ?></p>
									<h3 class="product-name"><a href="#"><?php echo $veiculo['descricaoVeiculo']; ?></a></h3>
									<h4 class="product-price">R$ <?php echo $veiculo['precoveiculo']; ?></h4>
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<div class="product-btns">
										<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
												class="tooltipp">Adicionar a lista de desejos</span></button>
										<button class="add-to-compare"><i class="fa fa-exchange"></i><span
												class="tooltipp">Adicionar para comparar</span></button>
										<button class="quick-view"><i class="fa fa-eye"></i><span
												class="tooltipp">Visualizar Veículos</span></button>
									</div>
								</div>
								
								<div class="add-to-cart">
										<a class="button button-primary-2 button-zakaria fl-bigmug-line-shopping202" href="produto-carrinho.php?idveiculo=<?php echo $veiculo['idveiculo']; ?>"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Add. ao Carrinho</button></a>
								</div>

							</div>
						</div>
						<!-- /product -->
						<?php } ?>

						
					</div>
					<!-- /store products -->

					<!-- store bottom filter -->
					<div class="store-filter clearfix">
						<span class="store-qty">MOSTRANDO 20-100 PRODUTOS</span>
						<ul class="store-pagination">
							<li class="active">1</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
						</ul>
					</div>
					<!-- /store bottom filter -->
				</div>
				<!-- /STORE -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- NEWSLETTER -->
	<div id="newsletter" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<div class="newsletter">
						<p>Saiba tudo sobre novos <strong>LANÇAMENTOS</strong></p>
						<form>
							<input class="input" type="email" placeholder="Digite seu Email"
								style="margin-bottom: 20px; width: 100%; border-radius: 40px;">
							<button class="newsletter-btn"><i class="fa fa-envelope"></i> Inscrever-se</button>
						</form>
						<ul class="newsletter-follow">
								<li>
									<a href="https://www.facebook.com/CarCenterConcessionaria"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="https://twitter.com/CarCenterofc"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="https://www.instagram.com/carcenterconces/"><i class="fa fa-instagram"></i></a>
								</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /NEWSLETTER -->

	<!-- FOOTER -->
	<footer id="footer">
		<!-- top footer -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row" >
					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">CarCenter</h3>
							
							<p>Estando no mercado a mais de 15 anos a CarCenter é a melhor concessionária para 
								quem deseja confiança e qualidade.</p>		
							<ul class="footer-links">
								<li><a href="#"><i class="fa fa-map-marker"></i>R. Feliciano de Mendonça, 290 - Guaianases</a></li>
								<li><a href="#"><i class="fa fa-phone"></i>11 999999999</a></li>
								<li><a href="#"><i class="fa fa-envelope-o"></i>carcenterconces@gmail.com</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Categorias</h3>
							<ul class="footer-links">
								<li><a href="#">Picape</a></li>
								<li><a href="#">Sedan</a></li>
								<li><a href="#">Hatch</a></li>
								<li><a href="#">Suvs</a></li>
								<li><a href="#">Tudo que precisa</a></li>
							</ul>
						</div>
					</div>

					<div class="clearfix visible-xs"></div>

					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Informações</h3>
							<ul class="footer-links">
								<li><a href="#">Sobre nós</a></li>
								<li><a href="#">Contato</a></li>
								<li><a href="#">Política de Privacidade</a></li>
								<li><a href="#">Encomendas e consórcios</a></li>
								<li><a href="#">Termos & Condições</a></li>
								<li><a href="../form-login-adm.php">Entrar como administrador</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Serviços</h3>
							<ul class="footer-links">
								<li><a href="#">Minha Conta</a></li>
								<li><a href="#">Ver Carrinho</a></li>
								<li><a href="#">Lista de Desejos</a></li>
								<li><a href="#">Rastrear meu pedido</a></li>
								<li><a href="#">Ajuda</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /top footer -->

		<!-- bottom footer 
		<div id="bottom-footer" class="section">-->
			<div class="container">
				<!-- row -->
				<div class="">
					<div class="col-md-12 text-center">
						<!--<ul class="footer-payments">
							<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
							<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
						</ul>-->
						<span class="copyright">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;
							<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados<i  aria-hidden="true"></i>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</span>
					</div>
				</div>
				
			</div>
			<!-- /container -->
		</div>
		<!-- /bottom footer -->
	</footer>
	<!-- /FOOTER -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- jQuery Plugins -->
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/slick.min.js"></script>
	<script src="../js/nouislider.min.js"></script>
	<script src="../js/jquery.zoom.min.js"></script>
	<script src="../js/main.js"></script>

</body>

</html>