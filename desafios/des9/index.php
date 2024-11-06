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
        date_default_timezone_set('America/Sao_Paulo');
        $dataAtual = date('Y');

        $nascimento = $_GET['nasc'] ?? 0;
        $ano = $_GET['year'] ?? $dataAtual;
    ?>

    <main>
        <h2>Calculando a sua idade</h2>
        <form action="<?php $_SERVER['PHP_SELF']?>">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" min="1900" max= "<?=($dataAtual-1)?>" value="<?=$nascimento?>">

            <label for="year">Quer saber sua idade em que ano? (Atualmente estamos em <strong><?php echo $dataAtual ?></strong>)</label>
            <input type="number" name="year" id="year" min="<?=$nascimento?>"; value="<?=$ano?>">

            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>
        <?php 
            $idade = $ano - $nascimento;
            echo "<h2>Resultado</h2>";
            echo "<p>Quem nasceu em $nascimento vai ter <strong> $idade anos</strong> em $ano!</p>";        
        ?>
    </section>

</body>
</html>