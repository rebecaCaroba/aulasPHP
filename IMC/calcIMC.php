<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo IMC</title>
</head>
<body>
    <?php 
    $pes = $_POST['peso'];
    $alt = $_POST['altura'];

    $res = $pes/($alt^2);
    echo "Resultado é $res <br>";

    if($res < 18.5){
        echo "Abaixo do normal";
    }

    if($res > 18.4 && $res < 25){
        echo "Peso normal";
    }

    if($res > 25 && $res < 30){
        echo "Excesso de peso";
    }

    if($res > 30 && $res < 35){
        echo "Obesidade classe I";
    }

    if($res > 35 && $res < 40){
        echo "Obesidade classe II";
    }

    if($res >= 40){
        echo "Obesidade classe III";
    }

    

    ?>
</body>
</html>