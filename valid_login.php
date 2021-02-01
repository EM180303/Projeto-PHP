<?php

session_start();
$usuario_autenticado = false;

$usuarios = array(
array('email'=> 'teste@gmail.com', 'pass' => '12344321'),
array('email' => 'edu@gmail.com', 'pass' => '12345678'),
);

foreach($usuarios as $entrada){
    if($entrada['email'] == $_POST['email'] && $entrada['pass'] == $_POST['pass']){
        $usuario_autenticado = true;
    }
}

if($usuario_autenticado){
    $_SESSION['validado'] = 'SIM';
    header('Location:home.php');
} else {
    $_SESSION['validado'] = 'NÃO';
    header('Location:index.php?login=erro');
}