<?php

session_start();
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