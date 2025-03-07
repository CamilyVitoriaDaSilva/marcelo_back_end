<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         print("<h1>Usando comando CASE em php</h1>");

         $a = "11";

         switch($a){
            case 1: print("Hoje dia da semana = domingo");
                   break;

            case 2: print("Hoje dia da semana = Segunda");
                    break;

            case 3: print("Hoje dia da semana = Terça");
                    break; 

            case 4: print("Hoje dia da semana = Quarta");
                    break;

            case 5: print("Hoje dia da semana = Quinta");
                    break;

            case 6: print("Hoje dia da semana = Sexta");
                    break;

            case 7: print("Hoje dia da semana = Sabádo");
                     break;

            default: print("Dia da semana não existe");
            
         }
    ?>
    
</body>
</html>