
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feira em Casa</title>

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Feira em Casa</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

  <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">

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

  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

</head>

<body> 

  <!-- Page Content -->
  <div class="container">

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
                <a class="nav-link" href="login.php">Login
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="carrinho.php">Carrinho
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="carrinho.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                  </svg>
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

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Página inicial</h1>
        <div class="list-group">
        <a href="index.php" class="list-group-item" style="background-color: #E8E1DF;">Página inicial</a>
          <a href="frutas.php" class="list-group-item">Frutas</a>
          <a href="verduras.php" class="list-group-item">Verduras / Legumes</a>
          <a href="folhagens.php" class="list-group-item">Folhagens</a>
          <a href="raizes.php" class="list-group-item">Raízes / Tubérculos</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <a href="frutas.php"><img class="d-block img-fluid" src="imagens/frutas-2.jpg" alt="Frutas"></a>
            </div>
            <div class="carousel-item">
              <a href="verduras.php"><img class="d-block img-fluid" src="imagens/verduras-legumes-p.jpg" alt="Verduras e legumes"></a>
            </div>
            <div class="carousel-item">
              <a href="folhagens.php"><img class="d-block img-fluid" src="imagens/hortalicas-p.jpg" alt="Folhagens"></a>
            </div>
            <div class="carousel-item">
              <a href="raizes.php"><img class="d-block img-fluid" src="imagens/raizes-p.jpeg" alt="Raízes"></a>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="frutas.php"><img class="card-img-top" src="imagens/frutas-2.jpg" alt="Pág de frutas"  height="170px"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="frutas.php"><h2>
                    Frutas
                  </h2></a>
                </h4>
                  <p class="card-text"><ul>
                  <li>Banana</li>
                  <li>Laranja</li>
                  <li>Maçã</li>
                  <li>Melancia</li>
                  <li>Uva Roxa</li>
                  </ul></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="verduras.php"><img class="card-img-top" src="imagens/verduras-legumes-p.jpg" alt="Pág verduras"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="verduras.php"><h2>
                    Verduras / Legumes
                  </h2></a>
                </h4>
                  <p class="card-text"><ul>
                  <li>Abobrinha</li>
                  <li>Cebola</li>
                  <li>Chuchu</li>
                  <li>Pepino</li>
                  <li>Tomate</li>
                  </ul></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="folhagens.php"><img class="card-img-top" src="imagens/hortalicas-p.jpg" alt="Pág Folhagens"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="folhagens.php"><h2>
                    Folhagens
                  </h2></a>
                </h4>
                  <p class="card-text"><ul>
                  <li>Alface</li>
                  <li>Coentro</li>
                  <li>Couve-Flor</li>
                  <li>Hortelã</li>
                  <li>Repolho</li>
                  </ul></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="raizes.php"><img class="card-img-top" src="imagens/raizes-p.jpeg" alt="Pág Raízes"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="raizes.php"><h2>
                    Raízes / Tubérculos
                  </h2></a>
                </h4>
                  <p class="card-text"><ul>
                  <li>Batata Doce</li>
                  <li>Cará</li>
                  <li>Inhame</li>
                  <li>Macaxeira</li>
                  <li>Mandioquinha</li>
                  </ul></p>
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->
    
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Feira em Casa 2021</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
