<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcular a raiz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>informe um numero</h1>
        <form action="">
            <label for="num">numero</label>
            <input type="number" name="num" id="num">
            <input type="button" value="calcular raiz" id="botao">
        </form>
    </main>
    <section>
        <h2>resultado final</h2>
        <?php 
            $num = $_GET["num"];
            echo "analizando o número $num, temos";
        ?>
    </section>
</body>
</html>