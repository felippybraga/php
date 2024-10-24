<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>trabalhando com numeros aleatorio</h1>
        <p>gerando um número aleatório de 0 e 100...</p>

        <?php 
        $numAleatorio = mt_rand(0, 100);
        echo "<p>o valor gerado fou <strong>$numAleatorio</strong></p>";
        ?>

        <input type="button" value="Gerar outro" onclick="carregar()">
    </main>

    <script>
        function carregar(){
            if ('click', carregar)
                window.document.location.reload()
        }
    </script>
</body>
</html>