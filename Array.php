<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
         $Cor[1] = "Vermelho";
         $Cor[2] = "Verde";
         $Cor[3] = "Azul";
         $Cor[4] = 3.141517;

         $Cor["PKcod"] = 1;

         // imprimindo conteudo do vetor - array
         print("$Cor[1]<br>$Cor[2]<br>$Cor[3]<br>$Cor[4]<br>$Cor[PKcod]<br>");
         // Forma alternatica de arrays
         print("<hr color=0000ff size=3><h1>Testando vetores</h1>");

         $cor = array(1 => "vermelho", 2=>"verde", 3 =>"Azul","FKCodDisc" => 1);
         echo $cor[1],"<br>";
         echo $cor[2],"<br>";
         echo $cor[3],"<br>";
         echo $cor["FKCodDisc"],"<br>";
        
        // uma linha

        
    
     ?>
</body>
</html>