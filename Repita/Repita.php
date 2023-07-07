<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY bgcolor="teal" text="white">
<center>
<h1>Exercicio - PARES de 0 a 100</h1>
<h3>Utilizando um loop for()</h3>
<hr>
<?php
     for($i=0; $i <= 100; $i+=2){
     echo "$i -";
     }
     echo "<br> Fim! Usando o comando for()!<br><br>";
     //------------------------------------------------------
     
     echo "<h3>Utilizando um loop while()</h3>";
     echo "<hr>";
     $c= 1;
     while ($c < 101) {
          echo "$c ";
          $c+=2;
     }
     echo "<br> Fim!Utilizando o while()"
?>
</center>
</BODY></HTML>
