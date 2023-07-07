<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parte II</title>
</head>
<body>
    <?php 
        session_start();
        
        $forma = $_POST['forma'];
        $cor = $_POST['cor'];       
        $m1 = "A forma:".$forma.", na cor:".$cor."... <br><br>";
        $_SESSION['Mens1']=$m1;
        $_SESSION['cor']= $cor;
        $_SESSION['forma']= $forma;

        echo "<form action='finalizarform.php' method='post'>";

        switch($forma){
            case "Retangulo":
            echo "<input type='number' name='l1' id='l1' placeholder='Digite o primeiro lado do retangulo'><br><br>";
            echo "<input type='number' name='l2' id='l2' placeholder='Digite o segundo lado do retangulo'><br><br>";
            break;
            case "Triangulo":
                echo "<input type='number' name='b' id='b' placeholder='Digite a base'><br><br>";
                echo "<input type='number' name='h' id='h' placeholder='Digite a altura'><br><br>";
            break;
            default:
            echo 'ERRO';
            break;
        }

        echo "<br><input type='submit' value='Proximo'>";
        echo "</form>";
    ?>
</body>
</html>