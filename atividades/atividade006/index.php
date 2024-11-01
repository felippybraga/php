<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dividindo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 0;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?=$divisor?>">
            <input type="submit" value="Analizar">
        </form>
    </main>
    <section id="resultado">
                <h2>Estrutura da divisão</h2><br>
        <?php 
            $resultado = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;
        ?>
        <div id="pai">

            <div class="divisão">
                <p><?=$dividendo?></p>
            </div>
            <div class="divisão" id="divisor">
                <p><?=$divisor?></p>
            </div>
            <div class="divisão">
                <p><?=$resto?></p>
            </div>
            <div class="divisão" id="resultado">
                <p><?=$resultado?></p>
            </div>
        </div>
    </section>
</body>
</html>