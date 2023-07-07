<head>
    <title>Resultado - Calculadora de Geometria plana</title>
</head>
<body>
    <?php 
    $preco = $_POST['preco'];
    $peso = $_POST['peso'];
    $local = $_POST['local'];
    $mpaga = $_POST['pagamento'];
    $frete = 0;
    $desconto = 0;
    $respreco = 0;
    $resfinal = 0;

    switch($local){
        case 'Poa':
            if($peso < 1){
                $frete = 7;
            }elseif ($peso >= 1){
                $frete = 8.50;
            }else {
                $frete = 11.50;
            }
            break;
        case 'Suzano':
            if($peso < 1){
                $frete = 8;
            }elseif ($peso >= 1){
                $frete = 9.50;
            }else {
                $frete = 12;
            }
            break;
            case 'Guarulhos':
                if($peso < 1){
                    $frete = 9.50;
                }elseif ($peso >= 1){
                    $frete = 10.50;
                }else {
                    $frete = 13;
                }
                break;
            default:
            echo "Erro ao calcular o frete";
            break;
    }

    echo "O frete e o valor final de Poá ate $local é: <br>";
    echo "Preço inicial: R$$preco <br>";

    if($mpaga === 'pix') {
        $desconto = 0.05;
        $respreco = $preco-($preco*$desconto);
        echo "Desconto: <span>R$ -$respreco </span><br>";
    }else {
        $respreco = $preco;
    }
    $resfinal = ($respreco + $frete);
    echo "Frete: + R$$frete <br>";
    echo "Valor a pagar: $resfinal <br>";
    ?>
</body>
</html>