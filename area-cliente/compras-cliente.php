<?php include_once 'verifica-logado-cliente.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../img/car-favicon.png">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>CarCenter - Minhas Compras</title>

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
							<div class="opcoeslogin" title="Entre ou Cadastre-se">
								<a href="#">
									<img src="../img/icone-login.png" style="height: 25px; display: inline-block;">
									<!--<span>Entrar/Cadastrar</span>--><br>
									<span>Olá,
										<?php 
									$Nome = $_SESSION['nomeCliente'];
									$primeiroNome = explode(" ", $Nome);
									echo $primeiroNome[0];  ?>
									</span>

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
								<a href="ver-carrinho.php" class="dropdown-toggle" data-toggle="dropdown"
									aria-expanded="true">
									<a href="ver-carrinho.php"> <i class="fa fa-shopping-cart"></i>
										<span>Carrinho</span>
										<div class="qty">
											<?php echo $qtdecarrinho;?>
										</div>
									</a>
								</a>

							</div>
							<!-- /Cart -->

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
					<li class="active"><a href="#">Minhas Compras</a></li>
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

	<!--QUEM SOMOS0-->
	<div id="breadcrumb" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<h2 class="breadcrumb-header">Minhas Compras</h2>
					<ul class="breadcrumb-tree">
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /QUEM SOMOS-->






	<?php
                    require_once 'global.php';
                    try {
                        $cliente = new Cliente();
                        $cliente->setidCliente($_SESSION['idCliente']);

                        $listavenda = Venda::listarPorCliente($cliente);
                        
                    } catch(Exception $e) {
                        echo '<pre>';
                            print_r($e);
                        echo '</pre>';
                        echo $e->getMessage();
                    }
                ?>

	<?php
                    require_once 'global.php';
                    try {
                        $listavenda = Venda::listar();
                        // $qtdePedido = Venda::contarPedido();
                        // $finalizados = Venda::pedidosFinalizados();
                        // $listaitens = ItemVenda::listar();
                    } catch(Exception $e) {
                        echo '<pre>';
                            print_r($e);
                        echo '</pre>';
                        echo $e->getMessage();
                    }
                ?>

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
										<table class="table table-striped">
											<thead style="background: #D10024; color: white;">
												<tr>
													<th scope="col">#</th>
													<th scope="col">Data da Venda</th>
													<th scope="col">Valor Total</th>
													<th scope="col">Ver itens</th>
													<th scope="col">Status</th>
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
													<td><button type="button" data-toggle="modal"
															data-target="#modalItensVenda" class="btn btn-primary"
															style="background: #D10024; border-color: #D10024;"
															onclick="verItemVenda('<?php echo $venda['idvenda'];?>')">Ver
															itens</>
													</td>
													<td>
														<?php echo $status; ?>
													</td>
													<?php
                                switch($venda['statusvenda']){
                                    case 1: 
                            ?>
													<td><button type="button" data-toggle="modal"
															data-target="#modalStatusVenda" class="btn btn-primary"
															style="background: #D10024; border-color: #D10024;"
															onclick="enviarIdVenda('<?php echo $venda['idvenda'];?>')">Cancelar
															venda</button></td>
													<?php

                                        break;
                                    case 2: case 3: case 4: case 5: echo ("<td></td>"); break;                                    
                                }
                            ?>

												</tr>
												<?php } ?>
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






			<!-- Modal -->
			<div class="modal fade" id="modalStatusVenda" tabindex="-1" role="dialog"
				aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color: #D10024;">
							<h5 class="modal-title" id="ModalEdita"
								style="color: white; font-size: 16px; font-weight: bold;">Mudar Status da Venda</h5>
							<button type="button" class="close" data-dismiss="modal"
								style="text-align: right; position: fixed; margin-left: 93%; margin-top: -20px;"
								aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="mudar-status-venda.php" method="post">
								<div class="modal-body">
									<div class="form-group" style="margin-top: 5px;">
										IdVenda:
										<input type="text" id="idvendaModal" name="idvendaModal" readonly>
										<br>
										<br>
										Status da venda:
										<select id="status" name="status" class="form-control">

											<option value="3">Cancelado pelo cliente</option>

										</select>
									</div>
								</div>

						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal"
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
			<div class="modal fade" id="modalItensVenda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
				aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color: #D10024;">
							<h5 class="modal-title" id="ModalEdita"
								style="color: white; font-size: 16px; font-weight: bold; color: white; font-size: 16px; display: flex; font-weight: bold; justify-content: center;">
								Ver Itens da Venda de Codígo: <div style="margin-left: 5px;" id="idvenda"></div>
							</h5>
							<button type="button" class="close" data-dismiss="modal"
								style="text-align: right; position: fixed; margin-left: 93%; margin-top: -20px;"
								aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<table class="table table-striped" style="margin-bottom: 0px;">
								<thead style="background-color: #D1002">
									<tr style="background-color: #D1002">
										<th scope="col">#</th>
										<th scope="col">Data da Venda</th>
										<th scope="col">Total</th>

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
							<button type="button" class="btn btn-secondary" data-dismiss="modal"
								style="font-size:  13px; color: #fff; background: #D10024;width: 40%;height: 40px; border-color: #D10024;">Fechar</button>

						</div>
						</form>

					</div>
				</div>
			</div>



		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- FOOTER -->
	<footer id="footer">
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
						<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados<i
							aria-hidden="true"></i>
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
		//document.getElementById("foto").addEventListener("change", readImage, false);


		//     $('#modalStatusVenda').on('click', function(){
		//     //   var nome = $(this).data('nome'); // vamos buscar o valor do atributo data-name que temos no botão que foi clicado
		//       var id = $(this).data('id'); // vamos buscar o valor do atributo data-id
		//       alert(id);
		//       $('span.idvenda').text(id); // inserir na o nome na pergunta de confirmação dentro da modal
		//     //   $('a.delete-yes').attr('href', 'mudar-status-venda.php?idvenda=' +id); // mudar dinamicamente o link, href do botão confirmar da modal
		//       $('#modalStatusVenda').modal('show'); // modal aparece
		// });

		function enviarIdVenda(valor) {
			document.getElementById('idvendaModal').value = valor;
		}

		function verItemVenda(valor) {
			document.getElementById('idvenda').innerHTML = valor;
		}
	</script>


</body>

</html>