<?php
    header ( 'Access-Control-Allow-Origin: *' );
    require "valid_navegacao.php";
    require "conexao.php";
    
    $produto = $_POST['produto'];
    $valor = $_POST['valor'];
    $quantidade = $_POST['quantidade'];
    $valor_pg = $quantidade * $valor;
    $valor_pg = strval(round($valor_pg, 2));
    
    $us_id = $_SESSION['idusuario'];
    
    $data = date('ymd');

    if (! isset ( $_SESSION [ 'carrinho'])) {
      $_SESSION ['carrinho' ] = array ();
    }
    array_push($_SESSION['carrinho'], $_POST);

   echo ("<script>
          window.alert('Produto adicionado ao carrinho com sucesso!')
          window.location.href='carrinho.php';
        </script>");  
    
