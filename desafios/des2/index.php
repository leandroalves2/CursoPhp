<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            echo "<h1>Trabalhando com números aleatórios</h1>";
            echo "Gerando um número aleatório entre 0 e 100...<br>";
            $rand = random_int(0, 100);
            echo "O valor gerado foi: <strong>$rand</strong><br>";

        ?>
        <input type="button" value="Gerar outro" onclick="location.reload()">

    </main>
</body>
</html>