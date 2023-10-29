<html>

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" href="img/car-favicon.png">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

   <title>CarCenter - Login & Cadastro</title>

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



   <form class="form-cliente-login" action="valida-login-cliente.php" method="POST">
      <div class="content" style="height: 580px;">
         <div class="form sign-in">
            <h2>Login</h2>
            <label>
               <span>Email</span>
               <input type="email" id="login" name="login" required="required" placeholder="login cliente"/>
            </label>
            <label>
               <span>Senha</span>
               <input type="password" id="senha" name="senha" required="required" placeholder="0000000"/>
            </label>
            <p class="forgot-pass" class="esqueci-hover"><a href="javascript:">Esqueci a senha</a></p>
            <button type="submit" class="submit" >Entrar</button>
            <button type="button" class="fb-btn">Entrar com <span>google</span></button>
            <p class="forgot-pass" class="esqueci-hover"><a href="index.php">Voltar</a></p>
   </form>

   </div>
   <div class="sub-cont">
      <div class="img">
         <div class="img__text m--up">
            <h2 style="color: #fff;">Ainda não tem conta?</h2>
            <p>Cadastre-se！</p>
         </div>
         <div class="img__text m--in">
            <h2 style="color: #fff;">Já tem conta？</h2>
            <p>Se possui, entre！</p>
         </div>
         <div class="img__btn">
            <span class="m--up">Cadastrar-se</span>
            <span class="m--in">Entrar</span>

         </div>
      </div>
      <div class="form sign-up">
         <h2>Cadastre-se</h2>
         <div class="panel panel-primary">
            <div style=" width:50%; float: left;">

               <form name="cadastro-cliente" method="post" action="cadastrar-cliente.php">
                  <label for="Nome" class="espaco-form-cliente" style="width: auto;">
                     <span class="input-group-addon">
                        Nome
                        <h11>*</h11>
                     </span>
                  </label>
                  <div class="espaco-form-cliente">
                     <input name="Nome" placeholder="completo" class="form-control input-md" required="" type="text">
                  </div>

                  <label for="Nome" class="espaco-form-cliente" style="width: auto;">
                     <span class="input-group-addon">
                        CPF
                        <h11>*</h11>
                     </span>
                  </label>
                  <div class="espaco-form-cliente">
                     <input name="cpf" placeholder="Apenas números" class="form-control input-md" id="TestaCPF" required="" type="text" maxlength="11" pattern="[0-9]+$">
                  </div>

                  <!-- Multiple Radios (inline) -->
                  <div>
                  </div>


                  <label for="prependedtext" class="espaco-form-cliente" style="width: auto;">
                     <span class="input-group-addon">
                        Telefone
                        <h11>*</h11>
                     </span>
                  </label>
                  <div class="espaco-form-cliente">
                     <div class="input-group" style="text-align: center;">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                        <input name="telefone" class="form-control" placeholder="xx xxxxx-xxxx" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" onkeypress="formatar('## #####-####', this)">
                     </div>
                  </div>


                  <label for="prependedtext" class="espaco-form-cliente" style="width: auto;">
                     <span class="input-group-addon">
                        Email
                        <h11>*</h11>
                     </span>
                  </label>
                  <div class="espaco-form-cliente">
                     <div class="input-group" style="text-align: center;">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input name="email" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                     </div>
                  </div>
                  <label class="col-md-1 control-label" for="senha" style="width: auto;">
                     <span class="input-group-addon" style="font-size: 15px;">
                        Senha
                        <h11>*</h11>
                     </span>
                  </label>
                  <div class="espaco-form-cliente">
                     <input name="senha" placeholder="*********" minlength="8" maxlength="20" class="form-control input-md" required type="password">
                  </div>
                  <label for="complemento" class="espaco-form-cliente" style="width: auto;">
                     <span class="input-group-addon">
                        Complemento
                     </span>
                  </label>
                  <div class="espaco-form-cliente">
                     <input name="complemento" placeholder="próximo a ..." class="form-control input-md" required="" type="text">
                  </div>


            </div>
            <div style="width: 50%; float: left; margin-bottom: -1px;">
               <label for="CEP" class="espaco-form-cliente">
                  <span class="input-group-addon">
                     CEP
                     <h11>*</h11>
                  </span>

               </label>
               <div class="espaco-form-cliente" style="margin-bottom: 25px;">
                  <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$">
                  <div style="margin-top: 20px; margin-bottom: 20px; width: 15px;">
                     <button type="button" class="btn btn-primary" style="position: fixed; margin-top: -56px; margin-left: 30%; color: black; width: 20px;" onclick="pesquisacep(cep.value)"><img src="img/local.png" style="width: 26px;"></button>
                  </div>
               </div>

               <div class="espaco-form-cliente">
                  <div class="input-group" style="text-align: center;">
                     <span class="input-group-addon">Rua</span>
                     <input id="rua" name="rua" class="form-control" placeholder="rua" required="" readonly="readonly" type="text">
                  </div>
               </div>
               <div class="espaco-form-cliente" style="margin: 25px auto 0; margin-left: 15px;">
                  <div class="input-group" style="text-align: center;">
                     <span class="input-group-addon">
                        Nº
                        <h11>*</h11>
                     </span>
                     <input name="numero" class="form-control" placeholder="número" required="" type="text">
                  </div>
               </div>
               <div class="espaco-form-cliente">
                  <div class="input-group" style="text-align: center;margin: 25px auto 0;">
                     <span class="input-group-addon" style="margin: 25px auto 0;">Bairro</span>
                     <input id="bairro" name="bairro" class="form-control" placeholder="bairro" required="" readonly="readonly" type="text">
                  </div>
               </div>

               <label for="prependedtext"></label>
               <div class="espaco-form-cliente">
                  <div class="input-group" style="text-align: center;">
                     <span class="input-group-addon">Cidade</span>
                     <input id="cidade" name="cidade" class="form-control" placeholder="cidade" required="" readonly="readonly" type="text">
                  </div>
               </div>
               <div class="espaco-form-cliente" style="margin: 25px auto 0; margin-left: 15px;">
                  <div class="input-group" style="text-align: center;">
                     <span class="input-group-addon">Estado</span>
                     <input id="estado" name="estado" class="form-control" placeholder="estado" required="" readonly="readonly" type="text">
                  </div>
               </div>
            </div>


            <label for="Cadastrar"></label>
            <div style="float: left; width: 100%; margin-top: 15px; display: flex; justify-content: space-between;">
               <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit" style="background: #D10024; float: left; width: 170px;">Cadastrar</button>
               <button id="Cancelar" name="Cancelar" class="btn btn-danger" style="background: #D10024; width: 170px;" type="Reset">Limpar</button>
               <button id="Cancelar" name="Cancelar" class="btn btn-danger" style="background: #d7d7d7; width: 170px; color: red;" type="Reset"><a href="index.php">Voltar</a></button>

            </div>

         </div>
      </div>
   </div>
   </div>
   </form>

   <!--<script>
                function TestaCPF(strCPF) {
                    var Soma;
                    var Resto;
                    Soma = 0;
                if (strCPF == "00000000000") return false;

                for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
                Resto = (Soma * 10) % 11;

                    if ((Resto == 10) || (Resto == 11))  Resto = 0;
                    if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;

                Soma = 0;
                    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
                    Resto = (Soma * 10) % 11;

                    if ((Resto == 10) || (Resto == 11))  Resto = 0;
                    if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
                    return true;
                }
                var strCPF = "12345678909";
                alert(TestaCPF(strCPF));
             </script>-->

   <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>-->

   <script src="js/script-form-cliente.js"></script>
   <script src="js/script.js"></script>
   <!--PRELOADER-->
   <script src="js/preloader.js"></script>

</body>

</html>