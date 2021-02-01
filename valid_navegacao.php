<?php
session_start();
if(!isset($sessao['validado']) || $sessao['validado'] != 'SIM'){
    header('Location:index.php?login=erro2');
}