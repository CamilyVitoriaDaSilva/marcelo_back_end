<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Operadores dentro da linguagem do php</h1>
    <?php
       echo"<hr> Usando Operadores eme PHP</hr><br>";
       $vara = $varb = 10;
       echo("A variavel A vale $vara <br>");
       echo("A variavel B vale $varb <br>");
       $varc = $vara++;
       echo("A variavel A continua valendo $vara <br>");
       echo("A variavel C vale $varc <br>");

       $varc = ++$vara;
       echo("A variavel A continua valendo $vara <br>");
       echo("A variavel C vale $varc <br>");
     
       $var_d = --$vara;
       print("A variavel var_d = $var_d");
     

    ?>
    
</body>
</html>