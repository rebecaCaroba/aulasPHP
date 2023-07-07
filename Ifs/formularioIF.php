<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY bgcolor="rebeccapurple" text="gold">
Aperta o botao:
<form action="aula2.php" method="post">

Primeiro nome: <br>
<input type="text" name="n1">
<br>
Selecione o sexo: <br>
<select name="s1">
<option value="F"> Feminino </option>
<option value="M"> Masculino </option>
</select>
<br>
<br>
Segundo nome: <br>
<input type="text" name="n2">
<br>
Selecione o sexo: <br>
<select name="s2">
<option value="F"> Feminino </option>
<option value="M"> Masculino </option>
</select>
<br><br>
<input type="submit" value="Enviar" name="chamaphp">
</form>

<?php
echo "Estou no formulario que chama php";
?>
</BODY>
</HTML>
