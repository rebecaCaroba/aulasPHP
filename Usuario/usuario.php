<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY>
<?php
  $pnome=$_POST["nome"];
  $pconteudo=$_POST["conteudo"];
  $pfundo=$_POST["corfundo"];
  $pletra=$_POST["corletra"];
  $pimg=$_POST["img"];

  if($pfundo == $pletra ) {
     if($pfundo == "black"){
     $pletra="white";
     }else {
     $pletra="black";
     }
  }

  echo "<body bgcolor='$pfundo' text='$pletra'>";
  echo "<br> <img src='$pimg' width=20% height=auto style='text-align: center;' <br> <br>";
  echo "<br> Nome do usuario: $pnome <br>";
  echo "Conteudo do site <br>";
  echo $pconteudo;
?>
</BODY>
</HTML>
