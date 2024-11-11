<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>salario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $minimo = 1412;
        $salario = $_GET['sal'] ?? 0;
        $qtSal = intdiv($salario, $minimo);
        $resto = $salario % $minimo;
    ?> 
    <main>
        <h1>Informe seu salario</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário</label>
            <input type="number" name="sal" id="sal" value="$salario" step="0.01">
            <p>considere o salario minimo de <strong>R$<?=number_format ($minimo, 2, ",", ".")?></strong></p>
            <input type="submit" value="calcular" id="botao">
            <section>
                <h2>Resultadofinal</h2>
                <?php
                
                    echo "<p>quem recebeu um sálario de $salario
                    ganha <strong>$qtSal Salarios minimos</strong> e + $resto <p>"
                ?>
            </section>
        </form>
    </main>
</body>
</html>