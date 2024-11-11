<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcular a raiz</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <main>
        <h1>informe um numero</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>">
            <label for="num">numero</label>
            <input type="number" name="num" id="num" value="<?=$num?>">
            <input type="submit" value="calcular raiz" id="botao">
        </form>
    </main>
    
        <section>
            <h2>Resultado Final</h2>
            <?php
                $num = $_GET['num'] ?? 0;
                $quadrado = sqrt($num);
                $cubica = $num ** (1/3);
                echo "<p>analisando o <strong>número $num</strong>, temos</p>";
                echo "<ul><li>a raiz quadrada é <strong>$quadrado</strong></li>";
                echo "<li>a raiz cubica é <strong>$cubica</strong></li></ul>";
            ?>
        </section>

</body>
</html>