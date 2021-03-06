<?php
require "valid_navegacao.php";
require "nav.php";

?>

<html lang="pt-BR">
<head>
   <script> type= "text/javascript"
   function valorProduto(){
     var total = 0;
     var num = document.getElementById("banana").value;
     result = 0.25 * num;
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
          <img src="imagens/banana.jpg" class="card-img-top" alt="banana">
          <div class="card-body">
            <form action="sucesso.php" method="POST">
            
              <h3 class="card-title ">Banana Maçã</h3>

              <input type="hidden" name="produto" value="Banana Maçã">
              <input type="hidden" name="valor" value=0.25>
              <p class="card-text">Preço por unidade R$: 0.25</p>
              <p id="valortotal"> Valor a ser pago: R$ 0.00</p>
              <p>Quantidade:</p>
              <input name="quantidade" class="btn btn-secondary" placeholder="Adicione a quantidade" type="number" id="banana" onblur="valorProduto();">
              <input class="btn btn-primary" type="button" onclick="valorProduto();" value="Calcular">
              <br>
              <br>
                <button class="btn btn-success">Adicionar ao carrinho</button>
              <br>
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
  <br>
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Feira em Casa 2021</p>
    </div>
    <!-- /.container -->
  </footer>
</body>
</html>