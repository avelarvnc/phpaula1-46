<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("components/cabecalho.html");
    ?>

    <form action="">
        <label>Valor 1</label>
        <input type="text" name="valor1">
        <label>Valor 2</label>
        <input type="text" name="valor2">
        <input type="submit" value="Calcular">
    </form>

    <?php

        if (isset($_GET["valor1"]) && isset($_GET["valor2"]))
        {
            //capturei o valor do input e armazenei na variável
            $v1 = $_GET["valor1"];
            $v2 = $_GET["valor2"];

            echo $v1 + $v2;
        }
   

    ?>



</body>
</html>