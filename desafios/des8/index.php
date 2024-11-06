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
            $valor1 = $_GET['v1'] ?? 0;
            $peso1 = $_GET['p1'] ?? 1;
            $valor2 = $_GET['v2'] ?? 0;
            $peso2 = $_GET['p2'] ?? 1;

        ?>

        <main>
            <h2>Médias Aritméticas</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
                <label for="v1">1° Valor</label>
                <input type="number" name="v1" id="v1" value="<?=$valor1?>">
                <label for="p1">1° Peso</label>
                <input type="number" name="p1" id="p1" value="<?=$peso1?>">

                <label for="v2">2° Valor</label>
                <input type="number" name="v2" id="v2" value="<?=$valor2?>">

                <label for="p2">2° Peso</label>
                <input type="number" name="p2" id="p2" value="<?=$peso2?>">

                <input type="submit" value="Calcular Médias">

            </form>
        </main>
        <section>
            <?php 

                $m_simples = ($valor1 + $valor2) / 2;
                $simples_format  = number_format($m_simples, 2, ',', '.');

                $m_ponderada = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2);
                $ponderada_format  = number_format($m_ponderada, 2, ',', '.');

                echo "<h2>Cálculo das Médias</h2>";
                echo "<p>Analisando os valores $valor1 e $valor1:</p>";
                echo "<ul>";
                echo "<li>A <strong>Média Aritimética Simples</strong> entre os valores é igual a $simples_format</li>";
                echo "<li>A <strong>Média ponderada</strong> com os pesos $peso1 e $peso2 é igual a $ponderada_format</li>";
                echo "</ul>";

            ?>
        </section>

</body>
</html>