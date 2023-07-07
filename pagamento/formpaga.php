<head>
    <meta charset="UTF-8">
    <title>Pagamento</title>
    <style>
        select {
            width: 100px;
        }
        * {
            font-size: 30px;
        }
        input[type="submit"]{
            cursor: pointer;
        }

    </style>
</head>
<body>
    <h1>Louja da Bereca</h1>
    <form action="parc.php" method="post">
        <p>
            Produto:
            <input type="text" name="prod" id="prod">
        </p>
        <p>
            Quantidade:
            <input type="number" name="quant" id="quant">
        </p>
        <p>
            Preço:
            <input type="number" name="preco" id="preco" step="any">
        </p> 
        <p>
            Valor mínimo das parcelas:
            <input type="number" name="vmpd" id="vmpd">
        </p>
        <p>
            Escolha o número das parcelas:
            <select name="nparc" id="nparc">
                <?php
                    for($i = 1;$i <= 60;$i++){
                        echo "<option value=$i> $i </option>";
                    }

                ?>
            </select>
            <br><br>
            <input type="submit" value="Calcular pagamento!">
        </p>
        
    </form>
</body>
</html>