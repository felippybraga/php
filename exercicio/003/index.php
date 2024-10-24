<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Testes de Tipos Primitivos</h1>
    <?php
        //$num = 0x1a;
        //echo "O valor da varavel é $num";

        //$v = 300;
        //var_dump($v);

        //$num = 3e2; // 3x10(2)=300
        //echo "o valor é $num";

        //$num =(float) "950";
        //var_dump($num);

        //$vet = [6, 2, 9, 3, 5];
        //echo "o vetor é $vet";

        class pessoa {
            private string $nome;
        }
        $p = new pessoa;
        var_dump($p)

    ?>
</body>
</html>