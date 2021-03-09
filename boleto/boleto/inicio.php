<html>

<head>
<title>--Cadastro de Produtos--</title>
<meta charset="utf-8" />
   <link href="inicio.css" rel="stylesheet" media="all" />
</head>

<body bgcolor = #fdb313>
   
<form name="meu_form" method="POST" action="gnvendas.php" class ="form" align = "center">

  <h1>Cadastro aqui seus produtos</h1>

  <label for="nome">Nome</label>  
  <input type="text" id="nomeid" placeholder="Nome do produto" required="required" name="nome" />
  
  <label for="valor">Valor</label>
  <input type="float" id="valorid" placeholder="EX: 1000 = R$10,00" name="valor" required="required" />
  
  
  
  <input type="submit" class="enviar" value="Cadastrar" /> <br> <br>
 

</form>

<div class = "dd" align = "end">    
<p>Se deseja comprar algum produto, clique no carrinho:</p>
<a href="comprar.php"> <img class = "imgm" aling = "center" src="http://collectionpng.com/images/27999.png"></a>
  </div>
</body>
</html> 

