<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculando a sua idade</title>
    <link rel="stylesheet" href="idade.css">
</head>
<body>
    <main>
        <h1>calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>">
            <label for="anoNasc">em que ano voce nasceu</label>
            <input type="number" name="anoNasc" id="anoNasc">
            <label for="anoAtual">Quer saber sua idade em q ano? (Atualmente estamos em )</label>
            <input type="number" name="anoAtual" id="anoAtual">
            <input type="submit" value="Qual sera a minha idade?" id="botao">
        </form>
    </main>

    <section>
        <h2>resultado</h2>
        <?php 
            $anoNas = $_GET['anoNasc'] ?? date('Y');
            $anoQuer = $_GET['anoAtual'] ?? date('Y');
            $idade = $anoQuer - $anoNas;

            echo "<p>quem nasceu em $anoNas vai ter <strong>$idade anos</strong> em $anoQuer</p>";
        ?>
    </section>
</body>
</html>