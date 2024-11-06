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
            $numero = $_GET["numero"] ?? 0;
            $numero = floatval($numero);
            $dolar = $numero / 5.22;
            $dolarFormatado = number_format($dolar, 2, ',', '.');
            echo "<h1>Conversor de Mordas v1.0</h1>";
            echo "<p>Seus R$ $numero equivalem a <strong>US\$  $dolarFormatado</strong> </p>";
            echo "<p>*<strong>Cotação fixa de R$5,22</strong> informada diretamente no código.</p>";        
        ?>
        <input type="button" value="← Voltar" onclick="history.go(-1)"> 
    </main>
</body>
</html>