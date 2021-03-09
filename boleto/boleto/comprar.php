<?php
    include("conexao.php");
    
     $result = "SELECT * FROM produtos";
     $resultado = mysqli_query($conn, $result) or die(' Erro na query:' . $query . ' ' . mysql_error() );
?>



<html> 
    <head>        
        <meta charset="utf-8" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
        <script src = "comprar.js"></script>
        <link href="style.css" rel="stylesheet" media="all" />
    </head>
    <body bgcolor ="#fdb313";>
    <table border ="1" align = "center">
    <thead>
    <tr bgcolor = "#d60a37";> 
    <th>Nome</th>
    <th>Valor</th>
    <th> </th>
    </tr>
    </thead>
    <form method="POST" action = "emitir_boleto.php" id= "form1">
    <?php
    $i = 1;
    $j = 1;

    while ($dado = mysqli_fetch_array($resultado)){?>
    <tbody>

    <tr height="40" >
    <?php echo '<td width="950" bgcolor = "white"><input id=\'c'.$i.'\' style=\'border:0;outline:0;display:inline-block\' value=\''.($dado["nome"]).'\' readonly = "true"></td></td>';?>
    <?php echo '<td bgcolor = "white"> R$ <input id=\'d'.$j.'\' style=\'border:0;outline:0;display:inline-block\' value='.number_format(($dado["valor"]/100),2,",",".").' readonly = "true"></td></td>';?>
    <?php echo '<td width="100" bgcolor = "white" align="center" ><button id = "btn" name = "enviar" onclick = "chamaPost(\'c'.$i.'\',\'d'.$j.'\')">COMPRAR</button></td>';?>
    </tr> 
    </tbody>
    <?php
    $i = $i+1;
    $j = $j+1;
    }?>
    <a href = "inicio.php"><img class = "imgm" aling = "center" width = "50" src="https://image.flaticon.com/icons/png/512/60/60927.png"></a>
    <h1 align = "center" class = "ttl">Compre seus produtos</h1>
    
 
    <div class ="teste" align = "left">
    
    <input id = "nome" name = "nome" value = "" hidden = "true"><br>
    <input id = "valor"name = "valor" value = "0" hidden = "true"><br>
    
    <p> Preencha o formulário com seus dados para comprar algum produto. </p>
    <label class ="lbl" for="nome_cliente" > Nome completo: </label>
    <input name = "nome_cliente" value = "" required="required" placeholder="Digite seu nome" class="ipts">


    <label class ="lbla" for="telefone"> Telefone: </label>
    <input name = "telefone" value = "" required="required" placeholder="Digite seu telefone" class="ipts">

    <label class ="lbla" for="cpf"> CPF: </label>
    <input name = "cpf" value = "" required="required" placeholder="Digite seu CPF" class="ipts"><br>
    <br><br><br>
    </div>
    </form>

</body>


</html>