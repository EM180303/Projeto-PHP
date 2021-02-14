<?php
require "valid_navegacao.php";
require "nav.php";
require "conexao.php";

$us_id = $_SESSION['idusuario'];

$query_ = "SELECT * FROM carrinho WHERE ce_ca_id = '$us_id'";
$resultado = $conect->query($query_);
  $mendata = 0;
  if($resultado->num_rows > 0){
    while($row = $resultado->fetch_assoc()){
      $tempdata = $row['ca_data'];
      if($tempdata > $mendata){
        $mendata = $tempdata;
      }
    }
  }

$query_ = "SELECT * FROM carrinho WHERE ce_ca_id = '$us_id' AND ca_data = '$mendata'";
$resultado = $conect->query($query_);
$pedidos = array();
$total = 0;
if ($resultado->num_rows > 0) {
  while ($row = $resultado->fetch_assoc()) {
    
    $pedidos[] = "Produto: ".$row['ca_produto'] . " || Quantidade: " . $row['ca_quantidade'] . " || Preço do produto: R$ " . $row['ca_valor'] . " || Valor pago: R$ " . $row['ca_valor_pg'];

    $total = $row['ca_valor_pg'] + $total;
    
  }

} else {

  echo ( "<script>
        window.alert ('Você ainda não possui nenhum pedido!')
        window.location.href = 'index.php';
    </script> " );
}

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
            
            $us_id = $_SESSION['idusuario'];

            $query_ = "SELECT * FROM dados WHERE ce_da_id = '$us_id'";
            $resultado = $conect->query($query_);
              $mdata = 0;
            if($resultado->num_rows > 0){
              while($row = $resultado->fetch_assoc()){
                $tdata = $row['da_data'];
                 if($tdata > $mdata){
                   $mdata = $tdata;
                 }
                $_SESSION['data'] =  $mdata;

              }
            }

            $query_ = "SELECT * FROM dados WHERE da_data = '$mdata'";
            $resultado = $conect->query($query_);

            if($resultado->num_rows > 0){
              while($row = $resultado->fetch_assoc()){
               echo '<p>Nome: '.$row['da_nome'].'</P>';
               print_r($pedidos);
               print_r($total);
              }
            }
            
            $conect->close();

            /*
            foreach ($pedidos as $dados) {
              #$pedidos = explode('#', $dados);
            
              echo '<p>'.$dados.'</p>';
              echo '<hr>';
            }
            */

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