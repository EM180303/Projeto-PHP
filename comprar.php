<?php

require "valid_navegacao.php";

?>

<html lang="pt-BR">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feira em Casa</title>

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Feira em Casa</title>

   <!-- Bootstrap core CSS -->
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/shop-homepage.css" rel="stylesheet">

<link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

  <script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);

        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>

</head>
<body>
     <!-- Page Content -->
    <div class="container">

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
            <a class="navbar-brand" href="index.php">Feira em Casa</a>
            <a href="index.php"><img src="imagens/logo-75.png" alt="Logo" width="50"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
           
            </div>
            
        </nav>

        <div class="row">
            <div class="col-lg-3">
               
            </div>

            <div class="col-lg-9">
            
                <div class="row">

                    <div style="text-align:center" class=" center col-md-8 mb-6">
                        <br>
                            <h1>Finalizar compra</h1>
                        <hr>
                        <p>Prencha os dados a baixo.</p>
                        <br>
                        <div class="card">
                           
    <form action="dados.php" method="POST" class="login100-form validate-form">


<div class="wrap-input100 validate-input m-b-16" data-validate="Digite o nome do destinatário">
    <input class="input100" type="text" name="name" id="cep"  placeholder="Nome">
    <span class="focus-input100"></span>
</div>

<div class="wrap-input100 validate-input m-b-16" data-validate="Digite seu email: ex@abc.xyz">
    <input class="input100" type="text" name="email" placeholder="Email">
    <span class="focus-input100"></span>
</div>

<div class="wrap-input100 validate-input m-b-16" data-validate="Digite o Cep da ">
    <input class="input100" type="text" name="cep" value="" size="10" maxlength="9" placeholder="Cep: 00000-000" onblur="pesquisacep(this.value);">
    <span class="focus-input100"></span>
</div>

<div class="wrap-input100 validate-input m-b-16" data-validate="Nome da rua:">
    <input class="input100" type="text" name="rua" id="rua" size="60" placeholder="Rua">
    <span class="focus-input100"></span>
</div>

<div class="wrap-input100 validate-input m-b-16" data-validate="Nome do bairro:">
    <input class="input100" type="text" name="bairro" id="bairro" size="40" placeholder="Bairro">
    <span class="focus-input100"></span>
</div>

<div class="wrap-input100 validate-input m-b-16" data-validate="Cidade:">
    <input class="input100" type="text" name="cidade" id="cidade" size="40" placeholder="Cidade">
    <span class="focus-input100"></span>
</div>

<div class="wrap-input100 validate-input m-b-16" data-validate="Digite o estado: EX">
    <input class="input100" type="text" name="uf" id="uf" size="2" placeholder="Estado">
    <span class="focus-input100"></span>
</div>

<div class="wrap-input100 validate-input m-b-16" data-validate="Digite o número da residência: 00">
    <input class="input100" type="text" name="casa" size="40" placeholder="Nº da casa">
    <span class="focus-input100"></span>
</div>

<div class="wrap-input100 validate-input m-b-16" data-validate="Digite o complemento: Casa X / Apartamento Y">
    <input class="input100" type="text" name="complemento" size="40" placeholder="Complemento ">
    <span class="focus-input100"></span>
</div>

<div class="validate-input m-b-6" data-validate="Dinheiro / Crédido / Débito">
<p>Forma de pagamento</p>
    <input class="input" type="radio" name="form_pagamento" value="Crédito" size="40"> Crédito <br>
    <span class="focus-input100"></span>
    <input class="input" type="radio" name="form_pagamento" value="Débito" size="40"> Débito <br>
    <span class="focus-input100"></span>
    <input class="input" type="radio" name="form_pagamento" value="Dinheiro" size="40"> Dinheiro <br>
    <span class="focus-input100"></span>
</div>


<div class="btn-success">
    <button type="submit" class="btn">
        Confirmar
    </button> 
</div>

</form>

                        </div> 
                            <br>
                        <div class="col-sm">
                            <a class="btn btn-danger" href="delete.php">Voltar para o carrinho</a>
                        </div>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

</body>
</html>