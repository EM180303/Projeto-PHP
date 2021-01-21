<?php
require "nav.php"
?>

<html>

<head>


</head>

<body> 

  <!-- Page Content -->
  <div class="container">

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
                  <a href="frutas.php">Frutas</a>
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
                  <a href="verduras.php">Verduras / Legumes</a>
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
                  <a href="folhagens.php">Folhagens</a>
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
                  <a href="raizes.php">Raízes / Tubérculos</a>
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
