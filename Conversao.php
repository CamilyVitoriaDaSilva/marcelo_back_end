<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de converção</title>
</head>
<body>
    <?php
        // Tranformação de tipos
        // Iniciando com coerçao
        echo"<br>COERSÃO<br>";


        $Info = "1";
        $Info = $Info + 4.5;
        echo $Info;
      
        echo"<br>TYPECAST<br>";
        $Informatica = 15;
        $Informatica = 1.1 +(double)$Informatica;
        echo $Informatica, "<br>";

        echo"<br>SETTYYPE<br>";

        $var10 = 10.2;
        $var12 = settype($var10,"integer");
        print("<br> Usando syttype na var10 $var12 SERÁ = $var12");

    ?>
     
</body>
</html>