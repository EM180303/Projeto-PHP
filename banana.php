<?php
require "nav.php"
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
   <script> type= "text/javascript"
   function valorProduto(){
     var total = 0;
     var num = document.getElementById("banana").value;
     total = 0.25 * num;
     document.getElementById("valortotal").textContent = "valor a ser pago: R$" + total;
   }
   </script> 
</head>
<body>

  <div class="Container">
    <div class="row">
      <div class="col-sm"></div>
      <div class="col-sm">
      <br>
        <div class="card" style="width: 18rem;">
          <img src="imagens/banana.jpg" class="card-img-top" alt="banana">
          <div class="card-body">
            <h5 class="card-title">Banana</h5>
            <p class="card-text">R$ 0,25 Und.</p>
            <br>
            <p id="valortotal"> Valor a ser pago: R$ 0.25</p>
            <p>Quantidade:</p>
            <input type="number" id="banana" onblur="valorProduto();">
            <br>
            <br>
            <input class="btn btn-primary" type="button" onclick="valorProduto();" value="Calcular">
            <br>
            <br>
            <form action="sucesso.php">
              <button class="btn btn-success">Adicionar ao carrinho</button>
            </form>
            <br>
            <a class="btn btn-danger" href="frutas.php">Cancelar</a>
          </div>
        </div>
      </div> 
      <div class="col-sm"></div>
    </div>
    </div>

</body>
</html>