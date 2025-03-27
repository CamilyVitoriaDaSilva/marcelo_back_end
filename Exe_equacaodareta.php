<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cálculo da nota com relação a digitação</h1>
    <h2>Usando a equação resumida de reta</h2>

    <form action="Exe_equacaodareta.php"
    method="POST">
    Digite a a taxa de velocidade de sua digitação
    (entre 20 e 52 ppm):<br>
    <input type="number" id="X" name="X">
    <input type="submit" name = "Enviar"
    value="Calcular" id="Enviar">

</form>

<?php
    if(isset($_POST['Enviar'])){
        $X= $_POST["X"];
        $Y=( 0.125*$X - 2.5) + 6;

        print("<br>Sua nota para a digitação PPM = $X é de $Y");
    }
 ?>

    
</body>
</html>