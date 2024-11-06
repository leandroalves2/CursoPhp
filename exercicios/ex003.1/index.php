<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Teste String</h1>

    <?php 
    
    // $nome = "Leandro \u{1F596}";
    // $sobrenome = 'Alves \u{1F596}';
    // echo 'Ola $nome $sobrenome!';
    // echo "Ola $nome $sobrenome!";

    // echo "Estamos no ano de date('Y')";
    // echo "Estamos no ano de " . date('Y');

    $nom = "Leandro";
    $snom = "Alves";
    $apelido = "Hiroshi";

    // echo "$nom "Hiroshi" $snom";
    // echo '$nom "Hiroshi" $snom';
    //echo "$nom \"Hiroshi\" $snom";

    //echo "$nom \n\t \"$apelido\" \t\t$snom"

    $ano = date('Y');

    // echo <<< TEST
    //     Meu nome é $nom!
    //             Meu sobrenome é $snom
    //         E meu apelido é $apelido \u{1F596}
    //     E estamos no ano $ano 
    // TEST;

    // echo <<< 'TEST'
    //     Meu nome é $nom!
    //             Meu sobrenome é $snom
    //         E meu apelido é $apelido \u{1F596}
    //     E estamos no ano $ano 
    // TEST;


    $x = "2";
    $y = "2";
    $func = $x + $y;
    echo "resultado é: $func";
    
    ?>
</body>
</html>