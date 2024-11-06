<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php 
        $valor = $_GET['number'];
    ?>

    <main>
        <h1>Informe um número</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">número</label>
            <input type="number" name="number" id="number" value="<?=$valor?>">
            <input type="submit" value="Calcular Reízes">
        </form>
    </main>

    <section>
        <?php 

            $raiz_quadrada = sqrt($valor);
            $raiz_q_formatada = number_format($raiz_quadrada, 3, ',', '.');

            $raiz_cubica = pow($valor, 1/3);
            $raiz_c_formatada = number_format($raiz_cubica, 3, ',', '.');

            echo "<h2>Resultado final</h2>";
            echo "<p>Analisando o <strong>número $valor</strong>, temos: </p>";
            echo "<ul>";
            echo "<li>A sua raiz quadrada é <strong>$raiz_q_formatada</strong></li>";
            echo "<li>A sua raiz cubica é <strong>$raiz_c_formatada</strong></li>";
            echo "</ul>";


        ?>
    </section>

</body>
</html>