<?php
session_start();

if(!isset($_SESSION['validado']) | $_SESSION['validado'] != 'SIM'){
    header('Location:login.php?login=erro1');
} 