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

            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);
            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $numero = $_GET["numero"] ?? 0;
            $numero = floatval($numero);
            $dolar = $numero / $cotacao;
            $dolarFormatado = number_format($dolar, 2, ',', '.');
            echo "<h1>Conversor de Mordas v1.0</h1>";
            echo "<p>Seus R$ $numero equivalem a <strong>US\$  $dolarFormatado</strong> </p>";
            echo "<p>*<strong>Cotação fixa de R$5,22</strong> informada diretamente no código.</p>";        
        ?>
        <input type="button" value="← Voltar" onclick="history.go(-1)"> 
    </main>
</body>
</html>