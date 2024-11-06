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
        $sec = $_GET['number'] ?? 0;
    ?>

    <main>
        <h2>Calcularoa de Tempo</h2>
        <form action="<?php $_SERVER['PHP_SELF']?>">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="number" id="number" value="<?=$sec?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <?php 

            $semanas = intdiv($sec, 604800);
            $resto_sem = $sec % 604800;
            $dias = intdiv($resto_sem, 86400);
            $resto_dia = $resto_sem % 86400;
            $horas = intdiv($resto_dia, 3600);
            $resto_hora = $resto_dia % 3600;
            $minutos = intdiv($resto_hora, 60);
            $resto_min = $resto_hora % 60;

            $sec_format = number_format($sec, 0, '', '.');
            echo "<h2>Totalizando tudo</h2>";
            echo "<p>Analisando o valor que você digitou, <strong>$sec_format</strong> equivalem a um total de: </p>";
            echo "<ul>";
            echo "<li>$semanas semanas</li>";
            echo "<li>$dias dias</li>";
            echo "<li>$horas horas</li>";
            echo "<li>$minutos minutos</li>";
            echo "<li>$resto_min segundos</li>";
            echo "</ul>";

        ?>
    </section>
    
</body>
</html>