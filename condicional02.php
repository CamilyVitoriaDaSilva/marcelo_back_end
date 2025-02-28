<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais 2</title>
</head>
<body>
    <?php
    $aluno = "Camily";
  $A = 100;
  $B = 101;

  print("Exercico com IF<br>");
  print("Aluno: $aluno<br>");
  print("O valor de a = $A<br>");
  print("O valor de b = $B<br>");
  if($A > $B){
    print("A variavel a $A é maior que b $B");
  }if($A == $B){
    print("A variavel a $A é igual que b $B");
  }
  else {
        print("A variavel a $A é menor que b $B");

  }

 print("<hr size=3 color='#0000ff'>"); 

  $dia = 10;

  if($dia ==1){
    print("domingo");
  } elseif ($dia ==2){
    print("Sexta-feira");
  } else {
    print("Dia da semana não existe");
  }


    print("<br>==========FIM DE PROGRAMA ==========<br>");  

    ?>

    
</body>
</html>