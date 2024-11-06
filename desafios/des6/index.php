<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $sal_min = 1380.60;
        $valor = $_GET['salario'] ?? 0;
    ?>
    <main>
    <h1>Informe seu salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" value="<?=$valor?>">
            <p>Considerando o salário minimo de <strong>R$1.380,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <?php 

            $result = intdiv($valor, $sal_min);
            $resto = $valor % $sal_min;

            $valor_formatado = 'R$' . number_format($valor, 2, ',', '.');
            $resto_formatado = 'R$' . number_format($resto, 2, ',', '.');


            echo "<h2>Resultado final</h2>";
            echo "<p>Quem recebe um salário de $valor_formatado ganha <strong>$result salários mínimos</strong> + R$ $resto_formatado</p>";
        ?> 
    </section>
</body>
</html>