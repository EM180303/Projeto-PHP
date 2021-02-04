<?php

session_start();
/*
$usuario_autenticado = false;

$usuarios = array();

$arquivo = fopen('arquivo_cadastrados.txt', 'r');

while(!feof($arquivo)) {
    $registro = fgets($arquivo);
    $usuarios[] = $registro;
}

fclose($arquivo);

foreach($usuarios as $user){
    $entrada_user = explode('#', $user);
    if(count($entrada_user) <3){
        continue;
    }
    if($entrada_user[1]== $_POST['email'] && $entrada_user[2]== $_POST['pass']){
        $usuario_autenticado = true;
    }
}

if($usuario_autenticado){
    $_SESSION['validado'] = 'SIM';
    header('Location:index.php');
} else{
    $_SESSION['validado'] = 'NÃO';
    header('Location:login.php?login=erro');
}
*/
print_r($_POST);
print_r($_SESSION);
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
          window.alert('Login realizado com Sucesso!')
          window.location.href='index.php';
      </script>");
        #header('Location:index.php');
    }
} else{
    $_SESSION['validado'] = 'NÃO';
    header('Location:index.php?login=erro1');
}
$conect->close();