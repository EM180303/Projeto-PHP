<?php

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

        <h1 class="my-4">Raízes / Tubérculos</h1>
        <div class="list-group">
        <a href="index.php" class="list-group-item">Página inicial</a>
          <a href="frutas.php" class="list-group-item">Frutas</a>
          <a href="verduras.php" class="list-group-item">Verduras / Legumes</a>
          <a href="folhagens.php" class="list-group-item">Folhagens</a>
          <a href="raizes.php" class="list-group-item" style="background-color: #E8E1DF;">Raízes / Tubérculos</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="imagens/raizes-p.jpeg" alt="Raízes e Tuberculos">
            </div>
          
          </div>
         
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="batata.php"><img class="card-img-top" src="imagens/batata-doce-p.jpg" alt="Batata Doce" height="145px"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="batata.php"><h3>
                    Batata Doce
                  </h3></a>
                </h4>
                <h5>R$3.59 Kg</h5>
                <p class="card-text">Batata Doce, cultivada sem agrotóxicos, nem conservantes.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="cara.php"><img class="card-img-top" src="imagens/cara.jpg" alt="Cará" height="145px"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="cara.php"><h3>
                    Cará
                  </h3></a>
                </h4>
                <h5>R$4.29 Kg</h5>
                <p class="card-text">Cará São Tomé, cultivado sem agrotóxicos, nem conservantes.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="inhame.php"><img class="card-img-top" src="imagens/inhame-p.jpg" alt="Inhame" height="145px"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="inhame.php"><h3>
                    Inhame
                  </h3></a>
                </h4>
                <h5>R$9.50 Kg</h5>
                <p class="card-text">Inhame, cultivado sem agrotóxicos, nem conservantes.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="macaxeira.php"><img class="card-img-top" src="imagens/macaxeira-p.jpg" alt="Macaxeira"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="macaxeira.php"><h3>
                    Macaxeira
                  </h3></a>
                </h4>
                <h5>R$3.10 Kg</h5>
                <p class="card-text">Macaxeira, cultivada sem agrotóxicos, nem conservantes.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4"></div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="mandioquinha.php"><img class="card-img-top" src="imagens/mandioquinha.jpg" alt="Mandioquinha" height="145px"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="mandioquinha.php"><h3>
                    Mandioquinha
                  </h3></a>
                </h4>
                <h5>R$19.99 Kg</h5>
                <p class="card-text">Mandioquinha, cultivada sem agrotóxicos, nem conservantes.</p>
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
