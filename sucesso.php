<?php
    header ( 'Access-Control-Allow-Origin: *' );
    require "valid_navegacao.php";
    require "conexao.php";

    if (! isset ( $_SESSION [ 'carrinho' ])) {
        $_SESSION [ 'carrinho' ] = array ();
      }

    $produto = $_POST['produto'];
    $valor = $_POST['valor'];
    $quantidade = $_POST['quantidade'];
    $valor_pg = $quantidade * $valor;
    $valor_pg = strval(round($valor_pg, 2));
    
    $us_id = $_SESSION['idusuario'];
    
    $stmt = $conect ->prepare("INSERT INTO carrinho (ce_ca_id,ca_produto,ca_quantidade,ca_valor,ca_valor_pg) VALUES (?,?,?,?,?)");
    $stmt->bind_param("isiss", $us_id, $produto, $quantidade, $valor, $valor_pg);
    $stmt->execute();
    $conect->close();

    array_push($_SESSION['carrinho'], $_POST);

    echo ("<script>
          window.alert('Produto adicionado ao carrinho com sucesso!')
          window.location.href='carrinho.php';
        </script>");  
    
 