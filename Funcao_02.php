<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções em PHP</title>
</head>
<body>
    <h1> Funções em PHP</h1>

    <?php
      $str;
      function adiciona_caracter(&$str){
        $str .=' <br> mais alguma coisa';
      }


      $str2 = 'aqui tenho uma palavra: nunca desista!!!';

      adiciona_caracter($str2);
      echo'<br>';
      echo $str2;
      echo'<br>';
      
      // echo 'aqui somente a str:';
      // echo $str;
      echo '<br>';
      $str3 ='turma 3ds';
      echo adiciona_caracter($str3);
      echo $str3;
      echo '<br>';

      function quadrado($num){
        return sqrt($num);
    }
        echo ' A raiz quadrada de 16 é : ';
        echo quadrado(16.0);

        function cafeteira($tipo="capuccino"){
            return "Fazendo café tipo $tipo" . PHP_EQL;

        }
       
        echo'<br>';
        echo cafeteira ();
        echo cafeteira ("expresso");
        echo cafeteira ("italiano");
        echo cafeteira ("Gourmet 3 corações");
        echo '<br>';

        function iorgurteira($sabor, $typo = "azedo"){
            return "Fazendo uma taça $typo $sabor";
        }
        echo'<br>';
        echo iorgurteira("Framboesa");
      
    ?>
    
</body>
</html>