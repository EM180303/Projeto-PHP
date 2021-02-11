<?php
header('Location:carrinho.php?cart=ok');

require "valid_navegacao.php";
require "conexao.php";


if (isset ($_GET['cart']) && $_GET['cart'] == 'ok');
foreach ($_SESSION['carrinho'] as $key => $value) :
    $pg = ($value['valor'] * $value['quantidade']);
    $total = $pg + $total;

    $us_id = $_SESSION['idusuario'];

    $data = date('ymd');
    
    $produto = $value['produto'];
    $quantidade = $value['quantidade'];
    $valor = $value['valor'];
    $valor_pg = $valor * $quantidade;

    $stmt = $conect ->prepare("INSERT INTO carrinho (ce_ca_id,ca_produto,ca_quantidade,ca_valor,ca_valor_pg,ca_data) VALUES (?,?,?,?,?,?)");
    $stmt->bind_param("isissd", $us_id, $produto, $quantidade, $valor, $valor_pg, $data);
    $stmt->execute();
    $conect->close();


 endforeach;
 
echo'Valor total da compra: R$ '.$total.''; 

/*
if (! isset ( $_SESSION [ 'carrinho'])) {
  $_SESSION ['carrinho' ] = array ();
}
array_push($_SESSION['carrinho'], $_POST);
*/


/*echo ("<script>
      window.alert('Produto adicionado ao carrinho com sucesso!')
      window.location.href='carrinho.php';
    </script>"); 
    */ 
