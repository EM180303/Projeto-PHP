<?php

session_start();

header('Access-Control-Allow-Origin: *');

require("conexao.php");
$email = $_POST['email'];
$query_ = "SELECT * FROM usuarios WHERE us_email ='$email'";
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

    $query_ = "SELECT * FROM usuarios WHERE us_email ='$email'";
    $resultado = $conect->query($query_);
    while ($row = $resultado->fetch_assoc()) {
        $_SESSION['idusuario'] = $row['us_id'];
    }
    $conect->close();
    $_SESSION['validado'] = 'SIM';
    
    echo ("<script>
          window.alert('Cadastro realizado com sucesso!')
          window.location.href='index.php';
      </script>");  
      
  }