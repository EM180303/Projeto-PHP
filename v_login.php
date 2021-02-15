<?php

session_start();

unset($_SESSION['carrinho']);
    
header('Access-Control-Allow-Origin: *');
require("conexao.php");
$email = $_POST['email'];
$senha = $_POST['pass'];
$query_ = "SELECT * FROM usuarios WHERE us_email = '$email' AND us_senha = '$senha'";
$resultado = $conect->query($query_);

if($resultado->num_rows > 0){
    while($row = $resultado->fetch_assoc()){
        $_SESSION['idusuario'] = $row['us_id'];
        $_SESSION['nome'] = $row['us_nome'];
        $_SESSION['validado'] = 'SIM';

        echo ("<script>
          window.alert('Login realizado com sucesso!')
          window.location.href='index.php';
      </script>");
      

    }
} else{
    $_SESSION['validado'] = 'NÃO';
    header('Location:login.php?login=erro');
}
$conect->close();