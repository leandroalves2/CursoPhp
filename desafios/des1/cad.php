<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    </header>
    <main>
        <?php 
            echo "<h1>Resultado Final</h1>";
            $numero = $_GET["numero"] ?? 0;
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;
            echo "O número escolhido foi <strong>$numero</strong><br>";
            echo "O seu antecessor é $antecessor<br>";
            echo "O seu sucessor é $sucessor<br>";    
        ?>
        <input type="button" value="← Voltar" onclick="history.go(-1)"> 
    </main>
</body>
</html>