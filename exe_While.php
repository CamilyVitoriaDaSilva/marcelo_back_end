<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
     <br>
     
</head>
<body>
    <h1>Usando repetiçaõ em PHP no while - tabuada</h1>
    <FORM method="POST"  action="exe_While.php">
     Digite a tabuada desejada:
     <input type="text" id="" name="resultado">
     <br>
     <input type="submit" value="Enviar" 
            id="Enviar" name="Enviar" >
</FORM>
           
    
    <?php 
     if(isset($_POST['Enviar'])){
        $resultado = $_POST["resultado"];
       print("O dia digitado é= $resultado <br>");

    print("exercicio estrutura de controle Repetição com while em php <br>");
    $num = 13;
    $cont = 1;
    while($cont <= 10){
        $resultado = $num *$cont;
        print("$num x $cont = $resultado<br>");
        $cont++; 
    } 
}
    print ("========fim de teste======");
    ?>
    
</body>
</html>