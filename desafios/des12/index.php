<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 100px;
        }
    </style>
</head>
<body>

    <?php 
        $saque = $_GET['number'] ?? 0;
    ?>

    <main>
        <h2>Caixa Eletronico</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="quest">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="number" id="number" step="5" value="<?=$saque?>">
            <p>*Notas disponiveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">


        </form>
    </main>
    

    <section>
        <?php 

            $cem = intdiv($saque, 100);
            $resto1 = $saque % 100;
            $cinquenta = intdiv($resto1, 50);
            $resto2 = $resto1 % 50;
            $dez = intdiv($resto2, 10);
            $resto3 = $resto2 % 10;
            $cinco = intdiv($resto3, 5);
            $resto4 = $resto3 / 5;

            $test1 = intdiv($saque, 5);
            $test2 = $saque % 5;         
                   
        ?>

        <h2>Saque de R$$saque realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="Nota de 100 reais" class="nota"> x<?=$cem?></li>
            <li><img src="imagens/50-reais.jpg" alt="Nota de 100 reais" class="nota"> x<?=$cinquenta?></li>
            <li><img src="imagens/10-reais.jpg" alt="Nota de 100 reais" class="nota"> x<?=$dez?></li>
            <li><img src="imagens/5-reais.jpg" alt="Nota de 100 reais" class="nota"> x<?=$cinco?></li>
        </ul>

    </section>
</body>
</html>