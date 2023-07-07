<head>
    <meta charset="UTF-8">
    <title>Finalizar a compra</title>
</head>
<body>
    <?php
    session_start();
    
    $me = $_POST["parc"];
    echo $_SESSION['Mens1'];
    echo "<br>";
    echo $_SESSION['Mens2'];
    echo "<br> $me";
    echo "<br> Muito obrigada!";
    echo "<br><a href='formpaga.php'> Voltar para o formulário </a>";
    
    ?>
</body>
</html>