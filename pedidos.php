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
                <a class="nav-link" href="index.php">Página inicial
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="carrinho.php">Carrinho<svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                  </svg>
                  <spa class="sr-only">(current)</span>
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

              if ($nome == 0){
                echo ( "<script>
                window.alert ('Você ainda não possui nenhum pedido!')
                window.location.href = 'index.php';
                </script> " );
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
                <a href="esconder.php" class="btn btn-danger">Esconder</a>
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