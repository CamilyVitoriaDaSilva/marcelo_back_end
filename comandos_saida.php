<?php

// Aqui é um comentário
/*
  comentário 
  várias linhas
  */
  echo "Alô Mundo, é nós na fita, comando echo!<br>";
  echo'olá, comando echo com <font color=#ff00ff>aspas</font> simples';
  echo("<br>Usando comando echo com parênteses e aspas duplas");


  print("<br>Agora usando o comando print");

 
  //criando variaveis em php usa-se o $ + o nome da variavel. ex.: $teste

  $teste = "TURMA DOS BÃO - 3DS - 2025";
  print("<h1><br>USANDO VARIAVEIS</h1><br><h2> Imprimindo com print e echo</h2><br>");
  print("Imprimindo conteudo da variavel teste usando print <br>$teste");
  echo("<br>Imprimindo conteudo da variavel teste usando print<br> $teste");
  echo'<br>Imprimindo conteudo da variavel teste usando print<br> $teste';


  print("<hr size=3 color=#0000ff> imprimindo variaveis númericas<br>");
  $num = 10/3;
  print("<br> Imprimindo dizima periodica 10/3 = $num");
  //formatando saida de nuemros com casas decimais
  printf("<br>  A dizima vale %.2f",$num);
  printf("<br>  A dizima vale %.5f",$num);
  printf("<br>  A dizima vale %.53f",$num);

  $pi = pi();
  $lego = "<br> o kit lego mindstorm é em homenagem a: ?<br>";
  printf("<br> pi = %.10f",$pi);
  print("<br>lego SEYMOUR PAPERT");



?>