<?php
require "valid_navegacao.php";
require "nav.php";
?>
<html lang="pt-BR">
<head>
   <script> type= "text/javascript"
   function valorProduto(){
     var total = 0;
     var num = document.getElementById("melancia").value;
     result = 7 * num;
     total = result.toFixed(2);
     document.getElementById("valortotal").textContent = "VALOR A SER PAGO: R$ " + total;
   }
   </script> 
</head>
<body>

  <div class="Container">
    <div class="row">
      <div class="col-sm"></div>
      <div class="col-sm"></div>
      <div class="col-sm">
      <br>
        <div class="card" style="width: 18rem;">
          <img src="imagens/melancia-p.jpg" class="card-img-top" alt="melancia">
          <div class="card-body">
            <form action="sucesso.php" method="POST">
              <h3 class="card-title">Melancia</h3>
              <input name="produto" type="hidden" value="Melancia">
              <p class="card-text">Valor por Kg R$: 7.00</p>
              <input name="valor" type="hidden" value="7.00">
              <p id="valortotal"> Valor a ser pago: R$ 0.00</p>
              <p>Quantidade:</p>
              <input name="quantidade" class="btn btn-secondary" placeholder="Adicione a quantidade" type="number" id="melancia" onblur="valorProduto();">
              <input class="btn btn-primary" type="button" onclick="valorProduto();" value="Calcular">
              <br>
              <br>
              <form action="sucesso.php">
                <button class="btn btn-success">Adicionar ao carrinho</button>
              </form>
              <br>
              <div class="row">
                <div class="col-sm"></div>
                <div class="col-sm">
                  <a class="btn btn-danger" href="frutas.php">Cancelar</a>
                </div>
                <div class="col-sm"></div>
              </div>
            </form>
          </div>
        </div>
      </div> 
      <div class="col-sm"></div>
      <div class="col-sm"></div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Feira em Casa 2021</p>
    </div>
    <!-- /.container -->
  </footer>
</body>
</html>