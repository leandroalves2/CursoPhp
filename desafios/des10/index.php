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
        $preco = $_GET['number'] ?? 0;
        $ran = isset($_GET['range']) ? $_GET['range'] : 0;    
    ?>

    <main>
        <h2>Reajustador de Preços</h2>
        <form action="<?php $_SERVER['PHP_SELF']?>">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="number" id="number" value="<?=$preco?>">
            <label for="percentual">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>%)</label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" ste´="1" oninput="mudaValor()">
            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <?php 
            $reajuste = $preco*($ran/100);
            $nvo_valor =  $preco + $reajuste;
            $valor_format  = number_format($nvo_valor, 2, ',', '.');

            $preco_format  = number_format($preco, 2, ',', '.');


            echo "<h2>Resultado do Reajuste</h2>";
            echo "<p>Om produto que custava R$$preco_format, com <strong>$ran% de aumento</strong> vai passar a custar <strong>R$$valor_format </strong> a partir de agora.</p>";
        ?>
    </section>

    <script>
        mudaValor()
        function mudaValor() {
            p.innerText = reaj.value;
        }
    </script>


</body>
</html>