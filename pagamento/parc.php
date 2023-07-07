<head>
    <meta charset="UTF-8">
    <title>Pagamento</title>
</head>
<body>
    <?php
    
    session_start();
    $prod = $_POST["prod"];
    $preco = $_POST["preco"];
    $quant = $_POST["quant"];
    $vmpd = $_POST["vmpd"];
    $nparc = $_POST["nparc"];
    $pvalor = $preco*$quant;
    $m1 = "O produto vendido foi ".$prod." no valor de: R$".number_format($pvalor,2); 
    $m2 = "O preço foi de R$".number_format($preco, 2)."A quantidade foi de:".$quant;

    $_SESSION['Mens1']=$m1;
    $_SESSION['Mens2']=$m2;

    echo "O total da sua compra foi R$".number_format($pvalor,2);

    echo "<form action='finalizar.php' method='post'>";
    echo "<br> <select name='parc'>";
    
    $m = "A vista no valor de R$".number_format($pvalor-($pvalor*0.05),2)."(Desconto de 5%)";
    echo "<option value='$m'> $m </option>";

    $m = "Boleto: R$".number_format(($pvalor+10),2)."(Taxa bancária de R$10,00)";
    echo "<option value='$m'> $m </option>";

    for($x = 1;$x <= 3;$x++){
        if($pvalor/$x >= $vmpd){
            $m = $x." parcelas de R$".number_format(($pvalor/$x),2)." sem juros";
            echo "<option value='$m'> $m </option>";

        }
    }
    for($x = 4;$x <= $nparc;$x++){
        $calcjuros = $pvalor + $pvalor*(0.02 * ($x-3));
        if($calcjuros/$x >= $vmpd){
            $m = $x ." parcelas de R$".number_format(($calcjuros/$x), 2)."com juros";
            echo "<option value='$m'> $m </option>";

        }
    }
    echo "</select> <input type='submit' value='Finalizar pagamento'> </form>";

    ?>
</body>
</html>