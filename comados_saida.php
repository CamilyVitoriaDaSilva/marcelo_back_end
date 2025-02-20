<?php // imprimindo outros tipos de dados númericos

print("<br> <hr size=4 color=#0000ff><h1> IMPRIMENDO TIPOS DE DADOS <h1>");

print("Inteiro posistivos<br>");
$var1 = 1234; // inteiro positivo base 10
print("var 1 é = $var1 <br>");

print("Inteiro negativos<br>");
$var2 = -1234; // inteiro nrgativo base 10
print("O número inteiro negativo var 2 = $var2 <br>");

print("<br> <hr size=4 color=#0000ff>");

print("Números base oito ou octal<br>");
$var3 = 0234; // inteiro nrgativo base 8 simbolizado pelo n zero antes
print("O número octal var 3 = $var3 em decimal <br>");

print("Número hexadecimal<br>");
$var4 = 0x34; // inteiro nrgativo base 10
print("O número inteiro hexadecimal 34 vale var 4 = $var4 <br>");

print("Números grandes - usando a letra E para o expoente do 10<br>");
$var5 = 23e70; // números grandes
print("O número é grande é respresentado por 23e70 vale = $var5 <br>");

print("Números pequenos- usando a letra E para o expoente do 10<br>");
$var6 = 23e-5; // números grandes
print("O número é grande é respresentado por 23e-5 vale = $var6 <br>");

//valores booleandos
print("Tipo de dado booleando<br>");
$falso = false;
print("O booleando falso é impresso com = $falso estou aqui<br>");
print("Tipo de dado booleando<br>");
$verdadeiro = true ;
print("O booleando verdadeiro é impresso com = $verdadeiro estou aqui<br>");
?>