<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e Tipos primitivos</title>
</head>
<body>

    <h1>Variaveis e Tipos primitivos</h1>

    <?php 
        $nome = "Leandro";
        $sobrenome = "Alves";

        const PAIS = "Brasil";

        echo "Meu nome é $nome $sobrenome, e moro no " . PAIS;


        $nome = "Karoline";
        $sobrenome = "Suzuki";

        echo "Meu nome é $nome $sobrenome, e moro no " . PAIS;
    ?>
    <p>Separando as aulas</p>

    <?php 
        // 0x = hexadecimal, 0b = binario, 0 = Octal
        // $num = 0x1A;
        // echo "O valor da variavel é $num"

        // $v = "Leandro";
        // var_dump($v);

        // $num = 3e2; // 3x 10(2)
        // echo "O valor de $num"

        // $num = (integer) 3e2; // 3x 10(2)
        // echo "O valor de $num"

        // $num = (double) "950";
        // echo "o valor é $num";
        // var_dump($num);

        // $casado = true;
        // var_dump($casado);
        // echo "O valor é: $casado";
        // $casado = false;
        // echo "O valor é: $casado";

        // $vet = [6, 2.5, "Maria", 3, false];
        // echo "$vet";
        // var_dump($vet);

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);

        
    ?>
</body>
</html>