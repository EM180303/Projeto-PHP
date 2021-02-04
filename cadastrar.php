<?php
/*
session_start();

$texto = $_POST['name'] . '#' . $_POST['email'] .  '#' . $_POST['pass'] . PHP_EOL;

$arquivo = fopen('arquivo_cadastrados.txt', 'a');
fwrite($arquivo, $texto);
fclose($arquivo);
$_SESSION['validado'] = 'SIM';
header('Location:index.php');
*/
header('Access-Control-Allow-Origin: *');

require("conexao.php");
$email = $_POST['email'];
$query_ = "SELECT * FROM usuarios WHERE email ='$email'";
$resultado = $conect->query($query_);
$registeredEmail = false;

if($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $registeredEmail = false;
        header('Location:cadastro.php?login=igual');
      }
}  else {
    $registeredEmail = true;
}

if ($registeredEmail) {
    $stmt = $conect->prepare("INSERT INTO usuarios (us_nome,us_sobrenome,us_idade,us_telefone,us_cep,us_email,us_senha) VALUES (?,?,?,?,?,?,?)");
    $stmt->bind_param("ssissss", $_POST['name'], $_POST['surname'], $_POST['yers'], $_POST['call'], $_POST['cep'], $_POST['email'], $_POST['pass']);
    $stmt->execute();
    $conect->close();
    
    echo ("<script>
          window.alert('Cadastro realizado com Sucesso!')
          window.location.href='index.php';
      </script>");
      #header('Location:index.php');
      
  }