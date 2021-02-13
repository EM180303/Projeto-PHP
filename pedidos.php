<?php
require "valid_navegacao.php";
require "nav.php";
require "conexao.php";

$us_id = $_SESSION['idusuario'];
$query_ = "SELECT * FROM carrinho WHERE ce_ca_id = '$us_id'";
$resultado = $conect->query($query_);
$pedidos = array();

if ($resultado->num_rows > 0) {
  while ($row = $resultado->fetch_assoc()) {
    
    $pedidos[] = "Produto: ".$row['ca_produto'] . " || Quantidade: " . $row['ca_quantidade'] . " || Preço do produto: R$ " . $row['ca_valor'] . " || Valor pago: R$ " . $row['ca_valor_pg'];
  }

} else {

  echo ( "<script>
        window.alert ('Você ainda não possui nenhum pedido!')
        window.location.href = 'index.php';
    </script> " );
}
$conect->close();

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
            <?php

            foreach ($pedidos as $dados) {
              #$pedidos = explode('#', $dados);
            
              echo '<p>'.$dados.'</p>';
              echo '<hr>';
            }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <br>
    <footer class="py-5 bg-dark" style="margin-top: 275px;">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Feira em Casa 2021</p>
    </div>
    <!-- /.container -->
  </footer>
</body>
</html>