<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funçaões em php</title>
</head>
<body>
    <h1> Funções em php - function</h1>

    <?php
        function divisao($n1, $n2){
            if( $n2 != 0){
            $quo = $n1 / $n2;
            printf("A equação $n1/$n2 = %.2f", $quo);
        } else {
            printf("não exite divisão por zero");
        }
    }

        function quadratica($a, $b, $c){
            $delta =(($b* $b) - (4* $a*$c)); 
            if($delta < 0 ){
                
            }

        }
         


        
        
    ?>
    
</body>
</html>