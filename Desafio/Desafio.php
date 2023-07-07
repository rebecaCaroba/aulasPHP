<HTML>
<HEAD>
 <TITLE>Desafio</TITLE>
 <style>
        * {
        font-size: 50px;
        }
 </style>
</HEAD>
<BODY bgcolor="rebeccapurple" text="white">
<?php

//Fazer senha que seja diferente de 0 e 1, e fique escondido por @..

$inicio= $_POST["inicial"];
$final= $_POST["final"];
$ordem= $_POST["ordem"];
$tipo= $_POST["tipo"];
$troca= 0;

if($inicio > $final){
  $troca = $inicio;
  $inicio = $final;
  $final = $troca;
}

if($ordem == "C"){
  if($tipo == "P"){
    for($i=$inicio;$i <= $final;$i++ ){
      if($i%2 == 0){
        echo "$i,  ";
      }
    }
  }else if($tipo == "I"){
    for($i=$inicio;$i <= $final;$i++ ){
      if($i%2 != 0){
        echo "$i,  ";
      }
    }
  }
}else if($ordem == "D"){
  if($tipo == "P"){
    for($i=$final;$i >= $inicio;$i-- ){
      if($i%2 == 0){
        echo "$i,  ";
      }
    }
  }else if($tipo == "I"){
    for($i=$final;$i >= $inicio;$i-- ){
      if($i%2 != 0){
        echo "$i,  ";
      }
    }
  }
}else{
    echo "imposs�vel";
  }

?>
</BODY>
</HTML>
