<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>media</title>
    <link rel="stylesheet" href="media.css">
</head>
<body>
    <main>
    <h1>médias aritméticas</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>">
        <label for="val1">valor 1</label>
        <input type="number" name="val1" id="val1" value="<?=$val1?>">
        <label for="pes1">peso 1</label>
        <input type="number" name="pes1" id="pes1" value="<?=$pes1?>">
        <label for="val2">valor 2</label>
        <input type="number" name="val2" id="val2" value="<?=$val2?>">
        <label for="pes2">peso2</label>
        <input type="number" name="pes2" id="pes2" value="oii">
        <input type="submit" id="botao" value="calcular medias">
    </form>
    </main>
    <section>
        <h2>calculos das medias</h2>
        <?php 
            $val1 = $_GET['val1'] ?? 0;
            $pes1 = $_GET['pes1'] ?? 0;
            $val2 = $_GET['val2'] ?? 0;
            $pes2 = $_GET['pes2'] ?? 0;

            $simples =  number_format(($val1 + $val2) /2, 2, ",", ".");
            $multiplo = ($val1 * $pes1) + ($val2 * $pes2);
            $ponderado = $multiplo / ($pes1 + $pes2);


            echo "<p>Analizando os valores $val1 e $val2</p>";
            echo "<ul><li>a <strong>Média Aritmética Simples</strong> entre os valores é iguala $simples</li>";
            echo "<li>a <strong>Média Aritmética Ponderada</strong> com pesos $pes1 e $pes2 é iguala $ponderado </li></ul>";
        ?>
    </section>

</body>
</html>