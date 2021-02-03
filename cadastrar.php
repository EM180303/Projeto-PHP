<?php
session_start();

$texto = $_POST['name'] . '#' . $_POST['email'] .  '#' . $_POST['pass'] . PHP_EOL;

$arquivo = fopen('arquivo_cadastrados.txt', 'a');
fwrite($arquivo, $texto);
fclose($arquivo);
$_SESSION['validado'] = 'SIM';
header('Location:index.php');
