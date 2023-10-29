<?php
include_once 'verifica-logado-cliente.php';
require_once 'global.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../img/car-favicon.png">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>CarCenter - Carrinho de Compras</title>

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


</head>

<body>

	<!-- HEADER -->
	<header>

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



					<!-- SEARCH BAR -->
					<div class="col-md-6">
						<div class="header-search">
							<form>
								<select class="input-select">
									<option value="0">Categorias...</option>
									<?php foreach ($listacategoria as $categoria) { ?>
										<option value="<?php echo $categoria['idcategoria']; ?>">
											<?php echo $categoria['nomecategoria']; ?>
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
							<div class="opcoeslogin" title="Entre ou Cadastre-se">
								<a href="#">
									<img src="../img/icone-login.png" style="height: 25px; display: inline-block;">
									<!--<span>Entrar/Cadastrar</span>--><br>
									<span>Olá,
										<?php
										$Nome = $_SESSION['nomeCliente'];
										$primeiroNome = explode(" ", $Nome);
										echo $primeiroNome[0]; ?>
									</span>

								</a>

							</div>

							<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>



							<!--/Wishlist-->

							<?php
							if (isset($_COOKIE["carrinho"])) {
								$carrinhorecebido = $_COOKIE["carrinho"];
								$carrinhoAtual = unserialize($carrinhorecebido);
								$qtdecarrinho = count($carrinhoAtual);
							} else {
								$qtdecarrinho = 0;
							}
							?>

							<!-- Cart -->
							<div class="dropdown" title="Conferir Carrinho">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
									<a href="#"> <i class="fa fa-shopping-cart"></i>
										<span>Carrinho</span>
										<div class="qty">
											<?php echo $qtdecarrinho; ?>
										</div>
									</a>
								</a>

							</div>
							<!-- /Cart -->


							<!-- Sair-->
							<a href="logout.php"><button class="rd-navbar-basket"><i class="fa fa-sign-out"
										aria-hidden="true" id="logout"> </i></i></button> </a>



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
					<li><a href="veiculos.php">Veículos</a></li>
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


	<!-- BREADCRUMB -->
	<div id="breadcrumb" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<h3 class="breadcrumb-header">Carrinho</h3>
					<ul class="breadcrumb-tree">
						<li><a href="index-cliente.php">Home</a></li>
						<li class="active" style="color: #D10024;">Carrinho</li>
					</ul>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /BREADCRUMB -->

	<!-- SECTION -->
	<div class="section" style="padding-top: 0px;">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<div class="col-md-7">
					<!-- Billing Details -->
					<div class="billing-details">
						<?php
						require_once '../models/veiculo.php';
						try {
							$listaveiculo = veiculo::listar();
						} catch (Exception $e) {
							echo '<pre>';
							print_r($e);
							echo '</pre>';
							echo $e->getMessage();
						}
						?>
						<div class="container">

							<div class="row">
								<div class="col-md-12">
									<div class="table-wrap">
										<table class="table table-striped text-center">
											<thead class="thead-primary" style="background: #D10024; color: white;">
												<?php
												if (!isset($carrinhoAtual) || empty($carrinhoAtual)) {
													echo '<h3 style="text-align: center;">Carrinho de compras vazio</h3>';
												} else {
													echo '<tr>';
													echo '<th style="text-align: center;">#</th>';
													echo '<th style="text-align: center;">Foto</th>';
													echo '<th style="text-align: center;">Descrição do Veículo</th>';
													echo '<th style="text-align: center;">Qtde.</th>';
													echo '<th style="text-align: center;">Preço</th>';
													echo '<th style="text-align: center;">Subtotal</th>';
													echo '<th style="text-align: center;">Remover</th>';
													echo '</tr>';
												}
												?>
											</thead>
											<tbody>
												<?php
												$valortotal = 0;
												if (isset($carrinhoAtual) && is_array($carrinhoAtual) && !empty($carrinhoAtual)) {
													foreach ($carrinhoAtual as $idvetorcarrinho => $itemcarrinho) {
														$valortotal += $itemcarrinho->getSubtotal();
														?>
														<tr>
															<th scope="row" style="text-align: center; width: 5%;">
																<?php echo $itemcarrinho->getVeiculo()->getIdVeiculo(); ?>
															</th>
															<td style='width: 30%;'><img
																	src="../<?php echo $itemcarrinho->getVeiculo()->getFotoVeiculo(); ?>"
																	width='30%' height='10%'></td>
															<td style="width: 25%;">
																<?php echo $itemcarrinho->getVeiculo()->getDescricaoVeiculo(); ?>
															</td>
															<td>
																<?php echo $itemcarrinho->getQtde(); ?>
															</td>
															<td>
																<?php echo number_format($itemcarrinho->getVeiculo()->getPrecoVeiculo(), 2, ',', '.'); ?>
															</td>
															<td>
																<?php echo number_format($itemcarrinho->getSubtotal(), 2, ',', '.'); ?>
															</td>
															<td><a class="btn btn-outline-danger"
																	href="remove-produto-carrinho.php?id=<?php echo $idvetorcarrinho; ?>">Remover
																	item do carrinho</a></td>
														</tr>
													<?php }
												}
												?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Billing Details -->


					<!-- </div> -->
				</div>
			</div>
			<!-- Shiping Details -->
			<div class="shiping-details"
				style="padding: 1px 40px; background-color: #f9f9f9; padding-bottom: 20px; margin: auto;  width: 70%; margin-bottom: 0px;">
				<div class="section-title text-center">
					<h3 class="title">Detalhes do Pedido</h3>
				</div>
				<div class="order-summary">

					<div class="order-col">
						<div><strong>
								<h4>VALOR TOTAL</h4>
							</strong></div>
						<div><strong class="order-total">R$
								<?php echo number_format($valortotal, 2, ',', '.'); ?>
							</strong></div>
					</div>
				</div>

				<div class="input-checkbox" style="margin-bottom: 15px;">
					<input type="checkbox" id="terms">
					<label for="terms" required>
						<span></span>
						Eu li e aceito ostermos e condições
					</label>
				</div>

				<center><a class="primary-btn order-submit"
						href="finaliza-venda.php?valortotal=<?php echo $valortotal; ?>">Finalizar Compra</a></center>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- FOOTER -->
	<footer id="footer" style="    border-top: 2px solid #E4E7ED;
	border-top: 3px solid #D10024;">
		<!-- top footer -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">CarCenter</h3>

							<p>Estando no mercado a mais de 15 anos a CarCenter é a melhor concessionária para
								quem deseja confiança e qualidade.</p>
							<ul class="footer-links">
								<li><a href="#"><i class="fa fa-map-marker"></i>R. Feliciano de Mendonça, 290 -
										Guaianases</a></li>
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
					<ul class="footer-payments">
						<li><a><i class="fa fa-cc-visa"></i></a></li>
						<li><a><i class="fa fa-credit-card"></i></a></li>
						<li><a><i class="fa fa-cc-paypal"></i></a></li>
						<li><a><i class="fa fa-cc-mastercard"></i></a></li>
						<li><a><i class="fa fa-cc-discover"></i></a></li>
						<li><a><i class="fa fa-cc-amex"></i></a></li>
					</ul>
					<span class="copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;
						<script>
							document.write(new Date().getFullYear());
						</script> Todos os direitos reservados<i aria-hidden="true"></i>
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

	<!-- bottom footer -->
	<div id="bottom-footer" class="section" style="padding-top: 0px; padding-bottom: 0px;">
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="footer-payments">
						<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
						<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
						<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
						<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
						<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
						<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
					</ul>

				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /bottom footer -->
	</footer>
	<!-- /FOOTER -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>