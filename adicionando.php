<?php
require "valid_navegacao.php";
require "conexao.php";
$nome = array(0 => "abobrinha", 1 => "alface lisa", 2 => "banana maçã", 3 => "batata doce", 4 => "cará são tomé", 5 => "cebola", 6 => "chuchu", 7 => "coentro", 8 => "couve-flor", 9 => "folhagens", 10 => "frutas", 11 => "hortelã", 12 => "inhame", 13 => "laranja bahia", 14 => "maçã gala", 15 => "macaxeira", 16 => "mandioquinha", 17 => "melancia", 18 => "pepino japonês", 19 => "raízes / tubérculos", 20 => "repolho", 21 => "tomate cereja", 22 => "uva roxa", 23 => "verduras / legumes", 24 => "carrinho", 25 => "pedidos", 26 => "login", 27 => "cadastro", 28 => "página inicial / home");

$categoria = array(0 => "produto", 1 => "produto", 2 => "produto", 3 => "produto", 4 => "produto", 5 => "produto",  6 => "produto", 7 => "produto", 8 => "produto", 9 => "tipo", 10 => "tipo", 11 => "produto", 12 => "produto", 13 => "produto", 14 => "produto", 15 => "produto", 16 => "produto", 17 => "produto", 18 => "produto", 19 => "produto", 20 => "produto", 21 => "produto", 22 => "produto", 23 => "produto", 24 => "página", 25 => "página", 26 => "página", 27 => "página", 28 => "página");

$pag = array(0 => "abobrinha.php", 1 => "alface.php", 2 => "banana.php", 3 => "batata.php", 4 => "cara.php",  5 => "cebola.php", 6 => "chuchu.php", 7 => "coentro.php", 8 => "couve.php", 9 => "folhagens.php", 10 => "frutas.php", 11 => "hortela.php", 12 => "inhame.php", 13 => "laranja.php", 14 => "maca.php", 15 => "macaxeira.php", 16 => "mandioquinha.php", 17 => "melancia.php", 18 => "pepiho.php", 19 => "raizes.php", 20 => "repolho.php", 21 => "tomate.php", 22 => "uva.php", 23 => "verduras.php", 24 => "carrinho.php", 25 => "pedidos.php", 26 => "login.php", 27 => "cadastro.php", 28 => "index.php");

for ($x = 0, $size = count($nome); $x < $size; ++$x){
    $stmt = $conect ->prepare("INSERT INTO busca (bu_nome,bu_categoria,bu_pag) VALUES (?,?,?)");
    $stmt->bind_param("sss", $nome[$x], $categoria[$x], $pag[$x]);
    $stmt->execute();

    print_r($x);
        
}

$conect->close();



