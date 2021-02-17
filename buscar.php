<?php
require "valid_navegacao.php";
require "conexao.php";

$busca = $_POST['buscar'];

$query_ = "SELECT * FROM busca WHERE bu_nome LIKE '%$busca%' ";
$resultado = $conect->query($query_);
if($resultado->num_rows > 0){
    while($row = $resultado->fetch_assoc()){
        $pag = $row['bu_pag'];
        
        echo ("<script>
          window.alert('Resultado da busca')
          window.location.href='$pag';
      </script>");
      
    }
} else{
    echo ("<script>
          window.alert('O item que você procura não consta em nossos arquivos, tente novamente')
          window.location.href='index.php';
      </script>");
} 

$conect->close();

