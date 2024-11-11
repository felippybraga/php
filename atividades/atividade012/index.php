<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculo de tempo</title>
    <link rel="stylesheet" href="segundos.css">
</head>
<body>
    <main>
    <h1>calculo de tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>">
            <label for="totalSeg">qual é o total de segundos?</label>
            <input type="number" name="totalSeg" id="totalSeg">
            <input type="submit" value="Calcular" id="botao">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?php 
            $totalSegundos = $_GET['totalSeg'] ?? 0;
            $semanas = intdiv($totalSegundos, 604800);
            $dias = intdiv($totalSegundos % 604800, 86400) ;
            $horas = intdiv($totalSegundos % 86400, 3600);
            $minutos = intdiv($totalSegundos % 3600, 60);
            $segundos = intdiv($totalSegundos % 60, 1);

            echo "<p>Analizando o valor que voce digitou, ".number_format($totalSegundos, 0, ",", ".") ."segundos equivalem:</p>";
            echo"<ul><li>$semanas semanas</li>";
            echo"<li>$dias dias</li>";
            echo"<li>$horas horas</li>";
            echo"<li>$minutos minutos</li>";
            echo"<li>$segundos segundos</li></ul>";
            
        ?>
    </section>
</body>
</html>