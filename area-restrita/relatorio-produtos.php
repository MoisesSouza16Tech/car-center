<?php
include_once("validador.php");


require_once "../models/conexao.php";

$conexao = Conexao::conectar();

$selectCat = $conexao->query("SELECT nomeCategoria FROM tbcategoria")->fetchAll();
?>
<!DOCTYPE php>
<php lang="pt-br">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="../img/car-favicon.png">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Relatório - Veículos</title>

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



		<!-- Estilização do Modal de Edição e Exclusão -->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/style-form.css">
		<link rel="stylesheet" href="../css/style-dashboard.css">
		<link rel="stylesheet" href="../css/style-table.css">


	</head>

	<body>
		<!-- HEADER -->
		<header>
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
						<li class="active">
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
					<div style="width: 100%;">
						<div style="width: 100%; margin-top: 15px;">
							<section class="">

								<div class="container">
									<div class="row justify-content-center" style="height: 0px;">
										<div class="col-md-6 text-center mb-5">
											<h2 class="heading-section">Cadastro de Veículo</h2>
										</div>
									</div>

									<form class="form-cliente" action="confirmaProdutos.php" method="POST"
										enctype="multipart/form-data">

										<div class="form sign-in" style="width: 100%; height: auto;">
											<center>
												<label style="float: left; margin-left: 15px;">
													<span>Descrição do Veículo</span>
													<input class="form-control" id="desc-veiculo" name="desc-veiculo"
														required="required" style="font-size: 1.4rem;" type="text"
														placeholder="veículo">
												</label>

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

												<label
													style="float: left; margin-left: 15px;align-content: space-between;">
													<span>Categoria</span>

													<div class="select">
														<select
															style="font: initial; color: #495057; width: 100%; height: 40px; border-radius: 3px; border: solid lightgrey 1px; outline: none;"
															name="categoria-veiculo" id="categoria-veiculo">
															<option selected>Escolher...</option>
															<?php foreach ($listacategoria as $categoria) { ?>
																<option value="<?php echo $categoria['idcategoria']; ?>">
																	<?php echo $categoria['nomecategoria']; ?>
																</option>
															<?php } ?>
														</select>
													</div>
												</label>


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

												<label
													style="float: left; margin-left: 15px;align-content: space-between;">
													<span>Marca</span>

													<div class="select">
														<select
															style="font: initial; color: #495057; width: 100%; height: 40px; border-radius: 3px; border: solid lightgrey 1px; outline: none;"
															name="marca-veiculo" id="marca-veiculo">
															<option selected>Escolher...</option>
															<?php foreach ($listamarcas as $marcaVeiculo) { ?>
																<option
																	value="<?php echo $marcaVeiculo['idmarcaveiculo']; ?>">
																	<?php echo $marcaVeiculo['nomemarcaveiculo']; ?>
																</option>
															<?php } ?>
														</select>
													</div>
												</label>
												<br>
												<label style="float: left; margin-left: 15px;">
													<span>Ano</span>
													<input class="form-control" style="font-size: 1.4rem;"
														id="ano-veiculo" name="ano-veiculo" required="required"
														type="number" min="1990" max="" placeholder="0000">
												</label>

												<label style="float: left; margin-left: 15px;">
													<span>Preço</span>
													<input class="form-control" style="font-size: 1.4rem;"
														id="preco-veiculo" name="preco-veiculo" required="required"
														type="text" placeholder="R$ 00,00">
												</label>
												<label style="float: left; margin-left: 15px;">
													<span>Foto</span>
													<input class="form-control" id="uploadImage" name="foto-veiculo"
														type="file" accept="image/*" onchange="PreviewImage();"
														style="outline: none; font-size: 1.2rem;" />
													<br>
													<div style="display: block; margin: auto;">
														<img src="../img/carro-limpo.png" id="uploadPreview"
															style="width: 110px; border: 1px solid #D10024;  margin: auto;" />
													</div>
												</label>




												<button type="submit" class="submit"
													style="width: 280px;border-radius: 15px;margin: auto;display: inline-block;margin-top: 20px;">Cadastrar</button>


										</div>
									</form>

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

								</div>

								<div class="container">
									<hr style="background-color: #dfdfdf; margin-top: 20px;">
									<div class="row justify-content-center">
										<div class="col-md-6 text-center mb-5">
											<h2 class="heading-section">Veículos Cadastrados</h2>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="table-wrap">
												<table class="table table-striped text-center">
													<thead class="thead-primary">
														<tr>
															<th>#</th>
															<th style="width: 30%;">Foto</th>
															<th>Descrição do Veículo</th>
															<th>Categoria</th>
															<th>Marca</th>
															<th>Ano</th>
															<th>Preço</th>
															<th>Editar</th>
															<th>Excluir</th>
														</tr>
													</thead>
													<tbody>
														<?php
														for ($i = 0; $i < count(veiculo::listar()); $i++) {
															print("
																	<tr>
																		<td>" . veiculo::listar()[$i][0] . "</td>
																		<td style='width: 30%;'><img src='../" . veiculo::listar()[$i][(1)] . "' width='30%'  height='10%'></td>
																		<td>" . veiculo::listar()[$i][2] . "</td>
																		<td>" . veiculo::listar()[$i][3] . "</td>
																		<td>" . veiculo::listar()[$i][4] . "</td>
																		<td>" . veiculo::listar()[$i][5] . "</td>
																		<td>" . veiculo::listar()[$i][6] . "</td>
																		<td><span class='glyphicon glyphicon-edit' data-toggle='modal' data-target='#ModalEdita' style='cursor: pointer;'></span></td>
																		<td><span class='glyphicon glyphicon-trash' data-toggle='modal' data-target='#ModalExclui' style='cursor: pointer;'></span></td>



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



							<!-- Modal -->
							<div class="modal fade" id="ModalEdita" tabindex="-1" role="dialog"
								aria-labelledby="ModalEdita" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header" style="background-color: #D10024;">
											<h5 class="modal-title" id="ModalEdita"
												style="color: white; font-size: 16px; font-weight: bold;">Editar Veiculo
											</h5>
											<button type="button" class="close" data-dismiss="modal"
												style="text-align: right;" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form class="form-cliente" action="#" method="POST">

												<div class="form sign-in"
													style="width: 100%; height: auto; padding: 0px">

													<center>
														<label>
															<span>Veiculo</span>
															<input class="form-control" id="desc-veiculo"
																name="desc-veiculo" required="required" type="text"
																style="font-size: 1.4rem;" placeholder="Marca">
														</label>
													</center>




												</div>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal"
												style="font-size:  13px;">Cancelar</button>
											<button type="submit" class="btn btn-primary"
												style="font-size:  13px;">Editar</button>
										</div>
									</div>
								</div>
							</div>

							<!-- Modal -->
							<div class="modal fade" id="ModalExclui" tabindex="-1" role="dialog"
								aria-labelledby="ModalExclui" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header" style="background-color: #D10024;">
											<h5 class="modal-title" id="ModalExclui"
												style="color: white; font-size: 16px; font-weight: bold;">Excluir
												Veículo</h5>
											<button type="button" class="close" data-dismiss="modal"
												style="text-align: right;" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form class="form-cliente" action="#" method="POST">

												<div class="form sign-in"
													style="width: 100%; height: auto; padding: 0px">

													<center>
														<label>
															<span>Deseja Realmente excluir veículo?</span>
														</label>
													</center>




												</div>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal"
												style="font-size:  13px;">Cancelar</button>
											<button type="submit" class="btn btn-primary"
												style="font-size:  13px;">Excluir</button>
										</div>
									</div>
								</div>
							</div>



						</div>

					</div>

				</div>
			</div>

			<!-- SCRIPTS DE TODO SITE-->

			<script>
				const btn = document.querySelector('#btn');
				const bxSearch = document.querySelector('.bx-search');
				const sidebar = document.querySelector('.sidebar');
				const home = document.querySelector('.homeContent');

				btn.addEventListener('click', () => {
					sidebar.classList.toggle('active');
					home.classList.toggle('active');
				});
			</script>

			<!--Ano atual-->
			<script>
				// Obtenha o ano atual
				var anoAtual = new Date().getFullYear();

				// Defina o valor máximo como o ano atual
				document.getElementById("ano-veiculo").max = anoAtual;
			</script>

			<!-- IMG FORM -->
			<script>
				function PreviewImage() {
					var oFReader = new FileReader();
					oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

					oFReader.onload = function (oFREvent) {
						document.getElementById("uploadPreview").src = oFREvent.target.result;
					};
				};
			</script>

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