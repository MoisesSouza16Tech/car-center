<?php
include_once("validador.php");
require_once("../models/categoria.php")
/*require_once "../global.php";*/
?>
<!DOCTYPE php>
<php lang="pt-br">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="../img/car-favicon.png">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Relatório - Categorias</title>

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
						<li class="active">
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

					<div style="width: 100%;">
						<div style="width: 100%; margin-top: 15px;">
							<section class="">

								<div class="container">
									<div class="row justify-content-center" style="height: 0px;">
										<div class="col-md-6 text-center mb-5">
											<h2 class="heading-section">Cadastrar Categoria</h2>
										</div>
									</div>


									<form class="form-cliente" action="confirmaCategoria.php" method="POST">

										<div class="form sign-in" style="width: 100%; height: auto;">

											<center>
												<label>
													<span>Categoria</span>
													<input class="form-control" id="categoria-veiculo"
														name="categoria-veiculo" required="required" type="text"
														style="font-size: 1.4rem;" placeholder="Categoria">
												</label>
											</center>

											<center>
												<button type="submit" class="submit"
													style="width: 200px;border-radius: 15px;margin: auto;display: inline-block;margin-top: 20px;">Cadastrar</button>
											</center>


										</div>
									</form>

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

								</div>

								<div class="container">
									<hr style="background-color: #dfdfdf; margin-top: 20px;">
									<div class="row justify-content-center">
										<div class="col-md-6 text-center mb-5">
											<h2 class="heading-section">Categorias Cadastradas</h2>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="table-wrap">
												<table class="table table-striped text-center">
													<thead class="thead-primary">
														<tr>
															<th scope="col">#</th>
															<th scope="col">Nome da Categoria</th>
															<th scope="col">Editar</th>
															<th scope="col">Excluir</th>
														</tr>
													</thead>
													<tbody>
														<?php
														/*require_once "global.php";*/
														for ($i = 0; $i < count(categoria::listar()); $i++) {
															print("
																	<tr>
																		<td>" . categoria::listar()[$i][0] . "</td>
																		<td>" . categoria::listar()[$i][1] . "</td>
																		<td><span class='glyphicon glyphicon-edit' data-toggle='modal' data-target='#ModalEdita' style='cursor: pointer;' onclick='editarCategoria(".categoria::listar()[$i][0].",\"".categoria::listar()[$i][1]."\")'></span></td>
																		<td><span class='glyphicon glyphicon-trash' data-toggle='modal' data-target='#ModalExclui' style='cursor: pointer;' onclick='excluirCategoria(".categoria::listar()[$i][0].")'></span></td>

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
								<div class="w3-container">

									<!-- <button type="button"  data-toggle="modal" data-target="#exampleModalCenter"
										class='w3-button w3-black'
										style='background-color: transparent!important; width: 16; '>
										<td><span class='glyphicon glyphicon-trash' style='color: black;'></span></td>
									</button>

									<button  type='button'  data-toggle='modal' data-target='#exampleModalCenter'
										class='w3-button w3-black'
										style='background-color: transparent!important; width: 16; '>
									</button> -->


									<!-- Button trigger modal -->
									<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button> -->
<!-- Modal de Edição de Veículo -->
<div class="modal fade" id="ModalEdita" tabindex="-1" role="dialog" aria-labelledby="ModalEdita" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #D10024;">
                <h5 class="modal-title" id="ModalEdita" style="color: white; font-size: 16px; font-weight: bold;">Editar Veículo</h5>
                <button type="button" class="close" data-dismiss="modal" style="text-align: right;" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-veiculo" action="#" method="POST">
                    <div class="form sign-in" style="width: 100%; height: auto; padding: 0px">
                        <center>
                            <label>
                                <span>Foto</span>
                                <input class="form-control" id="edita-foto" name="edita-foto" type="file">
                            </label>
                            <label>
                                <span>Descrição do Veículo</span>
                                <input class="form-control" id="edita-descricao-veiculo" name="edita-descricao-veiculo" type="text" placeholder="Descrição do Veículo">
                            </label>
                            <label>
                                <span>Categoria</span>
                                <select class="form-control" id="edita-categoria" name="edita-categoria">
                                    <!-- Opções de categoria -->
                                </select>
                            </label>
                            <label>
                                <span>Marca</span>
                                <select class="form-control" id="edita-marca" name="edita-marca">
                                    <!-- Opções de marca -->
                                </select>
                            </label>
                            <label>
                                <span>Ano</span>
                                <input class="form-control" id="edita-ano" name="edita-ano" type="text" placeholder="Ano">
                            </label>
                            <label>
                                <span>Preço</span>
                                <input class="form-control" id="edita-preco" name="edita-preco" type="text" placeholder="Preço">
                            </label>
                        </center>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="font-size: 13px;">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="editarVeiculo()" style="font-size: 13px;">Editar</button>
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
													<h5 class="modal-title" id="ModalExclui" style="color: white; font-size: 16px; font-weight: bold;">Excluir Categoria</h5>
													<button type="button" class="close" data-dismiss="modal"  style="text-align: right;"
														aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												
													<form class="form-cliente" action="excluir-categoria.php" method="POST">
												<div class="modal-body">
													
													

														<div class="form sign-in" style="width: 100%; height: auto; padding: 0px">

															<center>
																<label>
																<!-- <input type="hidden" name="id-categoria" id="id-categoria"> -->
																<input type="hidden" name="id-categoria" id="id-categoria-delete"> 
																	<span>Deseja Realmente excluir categoria?</span>
																</label>
															</center>

															
														</div>
													
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary"
														data-dismiss="modal"  style="font-size:  13px;">Cancelar</button>
													<button type="submit" class="btn btn-primary" style="font-size:  13px;">Excluir</button>
												</div>

												</form>
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

			<script>

				function editarCategoria(id, nome){
					var id = id;
					var nome = nome;
					document.getElementById("id-categoria").value=id;
					document.getElementById("categoria-veiculo-edit").value=nome;
				}

				
				function excluirCategoria(id){
					
					document.getElementById("id-categoria-delete").value=id;
					
				}
			</script>

	</body>
</php>