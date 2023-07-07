<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fINALIZANDO</title>
</head>
<body>
    <?php 
    session_start();
    $area = 0;

    if($_SESSION['forma'] === 'Retangulo'){    
    $l1 = $_POST['l1'];
    $l2 = $_POST['l2'];
    $area = $l1 * $l2;
        if($_SESSION['cor'] === 'Rosa' ){
           echo "<img src='./img/Rrosa.png' alt='Triangulo rosa'><br>";
        }
        if($_SESSION['cor'] === 'Vermelho' ){
            echo "<img src='./img/Remelho.png' alt='Triangulo rosa'><br>";
         }
         if($_SESSION['cor'] === 'Amarelo' ){
            echo "<img src='./img/Ramarelo.png' alt='Triangulo rosa'><br>";
         }
    }else {
        $b = $_POST['b'];
        $h = $_POST['h'];
        $area = ($b * $h)/2;
        if($_SESSION['cor'] === 'Rosa' ){
            echo "<img src='./img/Trosa.png' alt='Triangulo rosa'><br>";
         }
         if($_SESSION['cor'] === 'Vermelho' ){
             echo "<img src='./img/Tvermelho.png' alt='Triangulo rosa'><br>";
          }
          if($_SESSION['cor'] === 'Amarelo' ){
             echo "<img src='./img/Tamarelo.png' alt='Triangulo rosa'><br>";
          }
    }
    echo $_SESSION['Mens1'];
    echo "O resultado da area é:  $area";
    ?>
</body>
</html>