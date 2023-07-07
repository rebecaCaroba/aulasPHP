<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor a pagar</title>
    <style>
        body {
            font-size: 40px;
        }
    </style>
</head>
<body>
    <?php 
    $qtd =$_POST['qtd'];
    $dindin =$_POST['dindin'];
    $prod = $_POST['prod'];
    $preco = $_POST['preco'];

    $resQtd = $qtd *  $preco; // 2 = 24
    $troco = $resQtd - $dindin ; // 3- 24 = 21

    if($troco < $resQtd ) {
        echo "Você ficou devendo: <b> $troco!</b> <br>";
        echo "<body bgcolor='red' text='white'>";

    } else if($troco > $resQtd) {
        echo "Você tem de troco $troco! reais!<br>";
    } else {
        echo "Muito obrigado volte sempre! <br>";
    }
    echo "$prod, preço: $preco reais! ";

    
    ?>
</body>
</html>