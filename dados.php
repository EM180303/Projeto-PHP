<?php
 require "valid_navegacao.php";
 require "conexao.php";

 if (! isset ( $_SESSION [ 'dadosp'])) {
    $_SESSION ['dadosp' ] = array ();
  }
  array_push($_SESSION['dadosp'], $_POST);

  foreach ($_SESSION['dadosp'] as $key => $value) :

    $us_id = $_SESSION['idusuario'];

    $data = date('YmdHis');
            
    $nome = $value['name'];
    $email = $value['email'];
    $cep = $value['cep'];
    $rua = $value['rua'];
    $bairro = $value['bairro'];
    $cidade = $value['cidade'];
    $uf = $value['uf'];
    $casa = $value['casa'];
    $complemento = $value['complemento'];
    $fpg = $value['form_pagamento'];

    $stmt = $conect ->prepare("INSERT INTO dados (ce_da_id,da_nome,da_email,da_rua,da_bairro,da_cidade,da_uf,da_casa,da_complemento,da_pagamento,da_data) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("issssssissd", $us_id, $nome, $email, $rua, $bairro, $cidade, $uf, $casa, $complemento, $fpg, $data);
    $stmt->execute();         

endforeach;

$conect->close();

  echo ( "<script>
        window.alert ('Obrigado por comprar com a gente! volte sempre!')
        window.location.href = 'pedidos.php';
    </script> " );

    unset($_SESSION['carrinho']);
