<HTML>
<HEAD>
 <TITLE>Exercícios com if simples</TITLE>
</HEAD>
<BODY bgcolor="teal" text="white">
testando
<center>
<h1>Verificação do sexo<h1>
<h2>Utilizando condicional com if()</h2>
<hr><b><font face="arial" size="4" color="darkred"</b>
<h1>
<?php
//Definindo variaveis
/*$nome1="Rebeca";
$nome2="Pedro";
$nomes="$nome1 $nome2";
$sexo1="F";
$sexo2="M";     */
$nome1=$_POST["n1"];
$nome2=$_POST["n2"];
$sexo1=$_POST["s1"];
$sexo2=$_POST["s2"];
$nomes= "$nome1 $nome2";

echo "<br>";
//Utilizando condicional if() com operadores logicos;
if ($sexo1 == "M" && $sexo2 == "M")
{
echo "$nomes - So pessoas do masculino equipe! </h1>";
}

elseif (($sexo1 == "F" && $sexo2 == "F") || ($sexo1 == "f" && $sexo2 == "f"))
{
echo "$nomes - Só tem mulher nessa equipe!</h1>";
}

else
{
echo "$nomes - Tem um de cada sexo</h1>";
}

?>

</center>
</BODY>
</HTML>
