<HTML>
<HEAD>
 <meta charset="UTF-8"/>
 <TITLE>New Document</TITLE>
     <style>
    body {
    background-color: rebeccapurple;
    color: white;
        }
    span {
         font-weight: bold;
         color: red;
    }
    </style>
</HEAD>
<BODY>
 <?php
            $velcar=$_POST["velcar"];
            $velrua=$_POST["velrua"];
            $psitmulta=$_POST["sitmulta"];
            $mensagem=' ';
            $valormulta= 0;
            $ponto=0;

            if($velcar<=$velrua){
                $mensagem = utf8_encode ("N�o existe multa voc� est� dentro do limite permitido");
            }else if($psitmulta =='R'){
                $valormulta = 2934.70;
                $ponto=25;
                $mensagem= "A infra��o � grav�ssima agravada";
                $mensagem= "<b><u>Suspens�o imediata do direito de dirigir</u></b>";
            }else if($velcar <= $velrua*1.2){
                $valormulta=130.16;
                $ponto=4;
                $mensagem="A infra��o � m�dia";
            }else if(($velcar>$velrua*1.2)&&($velcar<=$velrua*1.5)){
                $valormulta=195.16;
                $ponto=5;
                $mensagem="A infla��o � grave";
            }else{
                $valormulta=880.41;
                $ponto=7;
                $mensagem="A infla��o � grav�ssima";
            }
            echo utf8_encode("<h2>Valor da multa:<span>$valormulta</span></h2>");
            echo utf8_encode("<h2>Pontos:<span>$ponto</span> </h2>");
            echo "<h2>$mensagem</h2>";
       ?>
</BODY>
</HTML>
