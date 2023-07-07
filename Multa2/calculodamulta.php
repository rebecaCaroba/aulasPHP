<html>
    <head>
        <title>Novo documento</title>
    </head>
    <body bgcolor="rebeccapurple">
       <?php 
            $velcar=$_POST["velcar"];
            $velrua=$_POST["velrua"];
            $psitmulta=$_POST["sitmulta"];
            $mensagem=' ';
            $valormulta= 0;
            $ponto=0;
            // $valormulta=$_POST["vMulta"];
            // $ponto=$_POST["Pontos"];
            
            if($velcar<=$velrua){
                $mensagem = "Não existe multa você está dentro do limite permitido";
            }else if($psitmulta =='R'){
                $valormulta = 2934.70;
                $ponto=25;
                $mensagem= "A infração é gravíssima agravada";
                $mensagem= "<b><u>Suspensão imediata do direito de dirigir</u></b>";
            }else if($velcar <= $velrua*1.2){
                $valormulta=130.16;
                $ponto=4;
                $mensagem="A infração é média";
            }else if(($velcar>$velrua*1.2)&&($velcar<=$velrua*1.5)){
                $valormulta=195.16;
                $ponto=5;
                $mensagem="A inflação é grave";
            }else{
                $valormulta=880.41;
                $ponto=7;
                $mensagem="A inflação é gravíssima";
            }
            echo "<p>Valor da multa:$valormulta</p>";
            echo "<p>Pontos: $ponto</p>";
            echo "<p>$mensagem</p>";
       ?> 
    </body>
</html>