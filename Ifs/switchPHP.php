<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY BGCOLOR="rebeccapurple" TEXT="white">
<center>
        <h1>Utilizando condicional com switch()</h1>
        <hr><b><font face="arial" size="4" color="white">
</center>
<?php
  $dia=7;
  switch ($dia){
case 1:
  echo "domingo<br>";
  break;
  
case 2:
  echo "segunda<br>";
 break;
  
case 3:
  echo "ter�a<br>";
  break;
  
case 4:
  echo "quarta<br>";
  break;
  
case 5:
  echo "quinta<br>";
  break;
  
case 6:
  echo "sexta<br>";
  break;
  
case 7:
  echo "sabado<br>";
  break;
  
default:
  echo utf8_encode("<h3>N�o � dia da semana!</h3>");
  break;
  }

//case simpples
$qtd=0;

switch ($qtd) {
case 0:
     echo "Nao e da equipe";
     break;

case 1: case 2: case 3: case 7: case 9:
     echo "A equipe com $qtd de alunos foi aceita!";
     break;
     
default:
        echo "A equipe com $qtd de alunos nao foi aceita";
        break;
}


?>
</BODY>
</HTML>
