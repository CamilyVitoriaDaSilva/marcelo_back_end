<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
</head>
<body>
    <?php
    print("Testendo se um número é par ou impar");

    $a = 13;

    if( ($a%2 ) == 0 ){
       print("<br>Variavel a = $a é  par<br>");
    } else {
        print("<br>Variavel a = $a é impar<br>");
    }

    $tri = 23680;

    if( ($tri%3 ) == 0 ){
        print("<br>O número = $tri é divisivel por 3<br>");
     } else {
         print("<br> O número = $tri é não divisivel por 3<br>");
     }
 
     
    
    ?>
</body>
</html>