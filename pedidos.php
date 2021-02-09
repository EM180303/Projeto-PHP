<?php
require "valid_navegacao.php";
require "nav.php"
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>

</head>
<body>
  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="col-lg-3">

          <h1 class="my-4">Pedidos</h1>
          <div class="list-group">
              <a href="carrinho.php" class="list-group-item">Carrinho</a>
              <a href="pedidos.php" class="list-group-item" style="background-color: #E8E1DF;">Pedididos</a>
          </div>
      </div>

      <div class="col-lg-9">
      
        <div class="row">

          <div style="text-align:center" class=" center col-md-8 mb-6">
            <br>
            <h1>Seus pedidos</h1>
            <hr>
            <div class="card">
              <h2>
                conteudo
              </h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus exercitationem incidunt soluta expedita optio molestias nam est, ipsa reiciendis nobis fuga? Fugit blanditiis at consectetur illum delectus quod qui magnam.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <br>
    <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Feira em Casa 2021</p>
    </div>
    <!-- /.container -->
  </footer>
</body>
</html>