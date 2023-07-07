<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exército</title>
</head>
<body>
    <?php
    $nome=$_POST['nome'];
    $idade=$_POST['idade'];
    $sexo=$_POST['sexo'];

    if($idade == 18 && $sexo == 'M') {
        echo "Sr(a) $nome, é obrigatório servir no exercito";
    }else if($idade > 26 && $idade < 45) {
        echo "Sr(a) $nome, é opcional servir no exercito";
    }

    if($idade == 18 && $sexo == 'F') {
        echo "Sr(a) $nome, é obrigatório servir no exercito";
    }else if($idade > 18 && $idade < 26) {
        echo "Sr(a) $nome, é opcional servir no exercito";
    }
    
    ?>
</body>
</html>