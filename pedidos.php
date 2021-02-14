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
              <br>
              <h2 style="font-size: 25px;">Último pedido</h2>
              <br>
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
                }
              }

              $query_ = "SELECT * FROM dados WHERE da_data = '$mdata'";
              $resultado = $conect->query($query_);

              if($resultado->num_rows > 0){
                while($row = $resultado->fetch_assoc()){
                echo '<p>Data do pedido: '.$row['da_data'].'<br> Valor total: R$ '.$total.'</P>';
                $nome = $row['da_nome'];
                $email = $row['da_email'];
                $rua = $row['da_rua'];
                $bairro = $row['da_bairro'];
                $casa = $row['da_casa'];
                $complemento = $row['da_complemento'];
                $cidade = $row['da_cidade'];
                $uf = $row['da_uf'];
                $fpg = $row['da_pagamento'];
                }
              }

              ?>
              <p>Status: <mark style="background-color: #00FF00;">Entregue</mark></p>
              <br>

              <a href="exibir.php" class="btn btn-secondary">Detalhes</a>

              <?php
                if (isset($_GET['exibir']) && $_GET['exibir'] == 'ok') { ?>
                <br>
                <h3 style="font-size: 18px;">Itens</h3>
                <?php
                  for ($i = 0, $size = count($pedidos); $i < $size; ++$i){
                  echo ('<p>'.$pedidos[$i].'</p>');
                  }
                  
                  echo ("Total da compra: R$ $total");
              ?>

              <hr>
              <h3 style="font-size: 18px;">Informações para entrega</h3>
                  <br>
              <?php
              
                echo "<p>Nome: </p>$nome";
                ?>
                <hr>
                <?php
                echo "<p>Endereço: </p>$rua, Nº $casa - $complemento, $bairro, $cidade - $uf";
                ?>
                <hr>
                <?php
                echo "<p>Forma de pagamento: </p>$fpg";

                $conect->close();
                
                ?>
                <br>
              <br>
              <?php
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