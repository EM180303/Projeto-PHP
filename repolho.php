<?php
require "valid_navegacao.php";
require "nav.php";
?>
<head>
   <script> type= "text/javascript"
   function valorProduto(){
     var total = 0;
     var num = document.getElementById("repolho").value;
     total = 6.50 * num;
     document.getElementById("valortotal").textContent = "Valor a ser pago: R$ " + total;
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
          <img src="imagens/repolho-p.jpg" class="card-img-top" alt="repolho">
          <div class="card-body">
            <h5 class="card-title">Repolho</h5>
            <p class="card-text">R$ 6,50 Kg</p>
            <p id="valortotal"> Valor a ser pago: R$ 6,50</p>
            <p>Quantidade:</p>
            <input class="btn btn-secondary" placeholder="Adicione a quantidade" type="number" id="repolho" onblur="valorProduto();">
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
                <a class="btn btn-danger" href="folhagens.php">Cancelar</a>
              </div>
              <div class="col-sm"></div>
            </div>
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