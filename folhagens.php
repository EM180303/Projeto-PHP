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

        <h1 class="my-4">Folhagens</h1>
        <div class="list-group">
        <a href="home.php" class="list-group-item">Página inicial</a>
          <a href="frutas.php" class="list-group-item">Frutas</a>
          <a href="verduras.php" class="list-group-item">Verduras / Legumes</a>
          <a href="folhagens.php" class="list-group-item" style="background-color: #E8E1DF;">Folhagens</a>
          <a href="raizes.php" class="list-group-item">Raízes / Tubérculos</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="imagens/hortalicas-p.jpg" alt="First slide">
            </div>
            
          </div>
         
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="alface.php"><img class="card-img-top" src="imagens/alface.jpg" alt="Alface" height="145px"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="alface.php"><h3>
                    Alface
                  </h3></a>
                </h4>
                <h5>R$2,59 Und.</h5>
                <p class="card-text">Alface Lisa, cultivada sem agrotóxicos, nem conservantes.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="coentro.php"><img class="card-img-top" src="imagens/coentro-p.jpg" alt="Coentro" height="145px"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="coentro.php"><h3>
                    Coentro
                  </h3></a>
                </h4>
                <h5>R$2,40 Und.</h5>
                <p class="card-text">Coentro, cultivado sem agrotóxicos, nem conservantes.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="couve.php"><img class="card-img-top" src="imagens/couve-flor-p.jpg" alt="Couve-Flor" height="145px"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="couve.php"><h3>
                    Couve-Flor
                  </h3></a>
                </h4>
                <h5>R$10,99 Und.</h5>
                <p class="card-text">Couve-Flor, cultivada sem agrotóxicos, nem conservantes.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="hortela.php"><img class="card-img-top" src="imagens/hortela.jpg" alt="Hortelã" height="145px"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="hortela.php"><h3>
                    Hortelã
                  </h3></a>
                </h4>
                <h5>R$3,50 Und.</h5>
                <p class="card-text">Hortelã, cultivada sem agrotóxicos, nem conservantes.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="repolho.php"><img class="card-img-top" src="imagens/repolho-p.jpg" alt="Repolho" height="145px"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="repolho.php"><h3>
                    Repolho
                  </h3></a>
                </h4>
                <h5>R$6,50 Kg</h5>
                <p class="card-text">Repolho, cultivado sem agrotóxicos, nem conservantes.</p>
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
