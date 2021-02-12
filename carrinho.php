<?php

require "valid_navegacao.php";
?> 

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feira em Casa</title>

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Feira em Casa</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

  <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">

  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

</head>
<body>
    <!-- Page Content -->
    <div class="container">

        <!-- Navigation -->
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

                <h1 class="my-4">Carrinho</h1>
                <div class="list-group">
                    <a href="carrinho.php" class="list-group-item" style="background-color: #E8E1DF;">Carrinho</a>
                    <a href="pedidos.php" class="list-group-item">Pedididos</a>
                </div>
            </div>

            <div class="col-lg-9"
            >
                <div class="row">

                    <div style="text-align:center" class=" center col-md-8 mb-6">
                        <br>
                            <h1>Seu carrinho<svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                        </svg></h1>
                        <hr>

                        <br>
                        <div class="card">
                            <?php
                            $total = 0;
                            if(isset($_SESSION['carrinho'])) { ?>
                                <br>
                                <div class="col-sm">
                                <a class="btn btn-info" href="index.php">Continuar comprando</a>
                                <br>
                                <br>
                            </div>
                                <br>
                                <br>
                               <br>
                            <?php
                                foreach ($_SESSION['carrinho'] as $key => $value) :
                                    $pg = ($value['valor'] * $value['quantidade']);
                                    $total = $pg + $total;
                                    echo '<p>Produto: '.$value['produto'].' | Quantidade: '.$value['quantidade'].' | Preço do produto: R$ '.$value['valor'].' | Valor a ser pago: R$ '.$pg.'</p>';
                                    
                                 endforeach;
                                 
                                echo'Valor total da compra: R$ '.$total.''; 

                                ?>
                                <br>
                            <div class="col ">
                                <div class="col order-last">
                                    <br>
                                    <a href="finalizar.php"><button class="btn btn-success">Finalizar compra</button></a>
                                </div>
                                <div class="col order-first">
                                    <br>
                                    <a href=""><button class="btn btn-danger">Deletar carrinho</button></a>
                                </div>
                            </div>
                                 
                          <?php  } else{ ?>
                          <br>
                               <div class="col-sm">
                               <a class="btn btn-info" href="index.php">Comprar</a>
                           </div>
                           <br>
                           <br>
                           <?php
                                print_r('Seu carrinho está vazio! <br>');
                                print_r('Então vamos enchê-lo já!');
                                print_r('<a href="index.php">Click aqui para ver os produtos disponíveis na loja</a>');

                            }
                            ?>
                            <br>
                        </div>
                        <br>
                        <br>  
                            </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <footer class="py-5 bg-dark" style="margin-top: 155px;">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Feira em Casa 2021</p>
    </div>
    <!-- /.container -->
  </footer>
</body>
</html>