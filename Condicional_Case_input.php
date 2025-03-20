<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CASE em PHP</title>
</head>
<body>
<FORM method="POST"
     action="Condicional_Case_input.php">
     DIGITE O NÚMERO DA SEMANA:
     <input type="text" id="dia" name="dia">
     <br>
     <input type="submit" value="Enviar" 
            id="Enviar" name="Enviar" >
    <br>
</FORM>
    <?php
        if(isset($_POST['Enviar'])){
            $dia = $_POST["dia"];
           print("O dia digitado é= $dia <br>"); 
          

         switch($dia){
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
    }
    ?>


</body>
</html>