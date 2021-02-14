<?php
header('Location:comprar.php');

require "valid_navegacao.php";
require "conexao.php";

$total = 0;

    foreach ($_SESSION['carrinho'] as $key => $value) :
        $pg = ($value['valor'] * $value['quantidade']);
        $total = $pg + $total;

        $us_id = $_SESSION['idusuario'];

        $data = date('YmdHis');
                
        $produto = $value['produto'];
        $quantidade = $value['quantidade'];
        $valor = $value['valor'];
        $valor_pg = $valor * $quantidade;

        $stmt = $conect ->prepare("INSERT INTO carrinho (ce_ca_id,ca_produto,ca_quantidade,ca_valor,ca_valor_pg,ca_data) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("isissd", $us_id, $produto, $quantidade, $valor, $valor_pg, $data);
        $stmt->execute();         

    endforeach;

$conect->close();
 
