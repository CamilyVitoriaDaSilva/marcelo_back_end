<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While em PHP</title>
</head>
<body>
    <h1>Estrutura while em php - Série numérica Fibonacci</h1>
    <form action="While_Fibonacci.php" method="POST">

    <input type="number"  name="num" id="num">
    <input type="submit" name="enviar" id="enviar"
    value="salvar"> 


    </form>
    <?php
        if(isset($_POST['enviar'])){
            $num = $_POST['num'];

        }
        print("Sequência numerica FIBONACCI - Númerico Áureo");

        $t1 = 1;
        $t2 = 1;
        echo"Termo 1 = $t1 <br>";
        echo"Termo 2 = $t2 <br>";
        $aux = 3;
        while($aux <= $num ):
            $novotermo = $t1 + $t2;
            $aureo = $t2 / $t1;
            echo "termo $aux = $novotermo --- N° = $aureo <br> ";
            echo "termo $aux = $novotermo <br>";
            $t1 = $t2;
            $t2 = $novotermo;
            $aux++;
        endwhile;  
    echo("fim de programa");  
    ?>
</body>
</html>