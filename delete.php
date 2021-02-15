<?php
require "valid_navegacao.php";
require "conexao.php";
header('Location:carrinho.php?delet=ok');

$deletedata = $_SESSION['data'];
$us_id = $_SESSION['idusuario'];
print_r($deletedata);
print_r($us_id);



$query_ = "DELETE FROM carrinho WHERE ca_data = '$deletedata' AND ce_ca_id = '$us_id'";
$resultado = $conect->query($query_);

$conect->close();

