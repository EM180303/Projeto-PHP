<?php

$texto = $_POST['name'] . '#' . $_POST['email'] .  '#' . $_POST['pass'] . PHP_EOL;

$arquivo = fopen('arquivo_cadastrados.txt', 'a');
fwrite($arquivo, $texto);
fclose($arquivo);
header('Location:home.php');
