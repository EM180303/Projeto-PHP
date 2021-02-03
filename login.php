
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Feira em Casa</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="imagens/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="index.php">Feira em Casa</a>
          <a href="index.php"><img src="imagens/logo-75.png" alt="Logo" width="50"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
		  <ul class="navbar-nav ml-auto">
              <li class="nav-item">
			  <li class="nav-item">
                            <a class="nav-link" href="index.php">Página inicial
                            <span class="sr-only">(current)</span>
                            </a>
                        </li>
              <li class="nav-item">
                <a class="nav-link" href="logoff.php">Sair
                  <span class="sr-only">(current)</span>
                </a>
              </li>

            </ul>
          </div>
        </div>
    </nav>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-90 p-b-30">
				<form action="v_login.php" method="POST" class="login100-form validate-form">

					<div class="text-center p-t-55 p-b-30">
						<span class="txt1">
							<h1>
								Login
							</h1>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Digite seu email: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-20" data-validate = "Digite sua senha">
						<span class="btn-show-pass">
							<i class="fa fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" placeholder="Senha">
						<span class="focus-input100"></span>
					</div>

					<?php if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
						<div class="text-danger">
						Email ou senha inválidos!
						</div>
					<?php } ?>

					<?php if (isset($_GET['login']) && $_GET['login'] == 'erro1') { ?>
						<div class="text-danger">
						Faça o login para acessar a página!
						</div>
					<?php } ?>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							CONFIRMAR
						</button>
					</div>
					
					<div class="flex-col-c p-t-100">
						<span class="txt2 p-b-10">
							Não possui uma conta?
						</span>

						<a href="cadastro.php" class="txt3 bo1 hov1">
							CADASTRE-SE
						</a>
					</div>
					
				</form>
			</div>
		</div>
		<!-- Footer -->
	<footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Feira em Casa 2021</p>
    </div>
    <!-- /.container -->
  </footer>
	</div>
	
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>