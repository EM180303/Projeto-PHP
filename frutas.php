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

        <h1 class="my-4">Frutas</h1>
        <div class="list-group">
        <a href="index.php" class="list-group-item">Página inicial</a>
          <a href="frutas.php" class="list-group-item" style="background-color: #E8E1DF;">Frutas</a>
          <a href="verduras.php" class="list-group-item">Verduras / Legumes</a>
          <a href="folhagens.php" class="list-group-item">Folhagens</a>
          <a href="raizes.php" class="list-group-item">Raízes / Tubérculos</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="imagens/frutas-2.jpg" alt="Frutas" width="519px">
            </div>
          </div>
          
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="banana.php"><img class="card-img-top" src="imagens/banana.jpg" alt="Bananas" height="145px"></a>
              <div class="card-body">
                <h4 class="card-title" >
                  <a href="banana.php"><h3>
                    Banana
                  </h3></a>
                </h4>
                <h5>R$0,25 Und.</h5>
                <p class="card-text">Banana Maçâ, cultivada sem agrotóxicos, nem conservantes.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="laranja.php"><img class="card-img-top" src="imagens/laranja.jpg" alt="Laranjas"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="laranja.php"><h3>
                    Laranja
                  </h3></a>
                </h4>
                <h5>R$0,50 Und.</h5>
                <p class="card-text">Laranja Bahia, cultivada sem agrotóxicos, nem conservantes.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="maca.php"><img class="card-img-top" src="imagens/maca.jpg" alt="Maçãs" height="145px"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="maca.php"><h3>
                    Maçã
                  </h3></a>
                </h4>
                <h5>R$0,80 Und.</h5>
                <p class="card-text">Maçã Gala, cultivada sem agrotóxicos, nem conservantes.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="melancia.php"><img class="card-img-top" src="imagens/melancia-p.jpg" alt="Melancia" height="145px"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="melancia.php"><h3>
                    Melancia
                  </h3></a>
                </h4>
                <h5>R$7,00 Kg</h5>
                <p class="card-text">Melancia, cultivada sem agrotóxicos, nem conservantes.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="uva.php"><img class="card-img-top" src="imagens/uva.jpg" alt="Uvas" height="145px"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="uva.php"><h3>
                    Uva
                  </h3></a>
                </h4>
                <h5>R$8,50 Kg</h5>
                <p class="card-text">Uva Roxa, cultivada sem agrotóxicos, nem conservantes.</p>
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
