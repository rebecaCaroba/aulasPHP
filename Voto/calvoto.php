<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado...</title>
</head>
<body>
    <?php 
    $idade = $_POST['idade'];

    if($idade > 18 && $idade < 70){
        echo "Você tem $idade, é obrigatório votar";
    }else {
        echo "Você tem $idade, não é obrigatório votar";
    }

    ?>
</body>
</html>