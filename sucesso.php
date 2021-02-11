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

    $stmt = $conect ->prepare("INSERT INTO carrinho (ce_ca_id,ca_produto,ca_quantidade,ca_valor,ca_valor_pg,ca_data) VALUES (?,?,?,?,?,?)");
    $stmt->bind_param("isissd", $us_id, $produto, $quantidade, $valor, $valor_pg, $data);
    $stmt->execute();
    $conect->close();

    echo ("<script>
          window.alert('Produto adicionado ao carrinho com sucesso!')
          window.location.href='carrinho.php';
        </script>");  
    
 