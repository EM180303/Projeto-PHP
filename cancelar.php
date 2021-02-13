<?php
require "valid_navegacao.php";

unset($_SESSION['carrinho']);

echo ("<script>
window.alert('O carrinho foi deletado!')
window.location.href='carrinho.php';
</script>");  
