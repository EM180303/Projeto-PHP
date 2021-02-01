<?php
$texto = $_POST['nome'] . '#' . $_POST['email'] . '#' . $_POST['pass']. PHP_EOL;

$arquivo = fopen('arquivo_cadastros.txt', 'a');
fwrite($arquivo, $texto);
fclose($arquivo);
header('Location:home.php?login=ok');