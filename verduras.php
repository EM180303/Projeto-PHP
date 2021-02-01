<?php
require "valid_navegacao.php";
require "nav.php";
?>

<html>

<head>


</head>

<body>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Verduras / Legumes</h1>
        <div class="list-group">
        <a href="home.php" class="list-group-item">Página inicial</a>
          <a href="frutas.php" class="list-group-item">Frutas</a>
          <a href="verduras.php" class="list-group-item" style="background-color: #E8E1DF;">Verduras / Legumes</a>
          <a href="folhagens.php" class="list-group-item">Folhagens</a>
          <a href="raizes.php" class="list-group-item">Raízes / Tubérculos</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
      
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="imagens/verduras-legumes-p.jpg" alt="Verduras e legumes" width="480px">
              <br>
            </div>
          </div>
         
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="abobrinha.php"><img class="card-img-top" src="imagens/abobrinha-2-p.jpg" alt="Abobrinha" height="145px"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="abobrinha.php"><h3>
                    Abobrinha
                  </h3></a>
                </h4>
                <h5>R$4,80 Kg</h5>
                <p class="card-text">Abobrinha, cultivada sem agrotóxicos, nem conservantes.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="cebola.php"><img class="card-img-top" src="imagens/cebola.jpg" alt="Cebola" height="145px"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="cebola.php"><h3>
                    Cebola
                  </h3></a>
                </h4>
                <h5>R$3,25 Kg</h5>
                <p class="card-text">Cebola, cultivada sem agrotóxicos, nem conservantes.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="chuchu.php"><img class="card-img-top" src="imagens/chuchu.jpg" alt="Chuchu" height="145px"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="chuchu.php"><h3>
                    Chuchu
                  </h3></a>
                </h4>
                <h5>R$1,50 Und.</h5>
                <p class="card-text">Chuchu, cultivado sem agrotóxicos, nem conservantes.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="pepino.php"><img class="card-img-top" src="imagens/pepino-2-p.jpg" alt="Pepinos" height="145px"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="pepino.php"><h3>
                    Pepino
                  </h3></a>
                </h4>
                <h5>R$2,20 Kg</h5>
                <p class="card-text">Pepino Japonês, cultivada sem agrotóxicos, nem conservantes.</p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="tomate.php"><img class="card-img-top" src="imagens/tomate-p.jpg" alt="Tomates ceraja" height="145px"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="tomate.php"><h3>
                    Tomate
                  </h3></a>
                </h4>
                <h5>R$20,99 Kg</h5>
                <p class="card-text">Tomate Cereja, cultivado sem agrotóxicos, nem conservantes.</p>
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
      <p class="m-0 text-center text-white">Copyright &copy; Feira em casa 2021</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
