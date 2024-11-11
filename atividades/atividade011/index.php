<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de Preço</title>
    <link rel="stylesheet" href="preço.css">
</head>
<body>
    <main>
        <h1>Reajuste de Preço</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>">
            <label for="preço">Preço do Produto (R$)</label>
            <input type="number" name="preçoProd" id="preçoProd">
            <label for="porcentagem">qual sera o percentual de reajuste? (<output id='val'>1</output>%)</label>
            <input type="range" step="1" value="0" name="percentual" id="porcentagem" oninput="val.innerHTML = Number(porcentagem.value)">
            <input type="submit" value="Reajustar" id="botao">
        </form>
    </main>

    <section>
        <h2>resultado do reajuste</h2>
        <?php
            $preço = $_GET['preçoProd'] ?? 0;
            $percentual = $_GET['percentual'] ?? 0;
            $custara = $percentual * $preço / 100 + $preço;

            echo "<p>Produto que custava R$".number_format($preço, 2, ",", ".").", com $percentual% de aumento vai passar a cuastar  R$ ".number_format($custara, 2, ",", ".")." a partir de agpra.</p>"
            ?>
    </section>
</body>
</html>