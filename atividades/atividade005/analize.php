<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>analizador de numeros reias</title>
    <link rel="stylesheet" href="style.css">
    <style>
        p {
            background-color: white; 
            padding: 15px;
            display: block;
            padding: 0px;
            padding-bottom: 10px;
        }

        main {
            width: 500px;
            height: 255px;
        }
    </style>
</head>
<body>
    <main>
        <h1>analizador de numeros reias</h1>
        <?php
            $numero = $_GET["valor"];

            echo "<p>Analizando o número <strong>$numero</strong> informado pelo usario</p>";

            
            $inteiro = (int)$numero;
           $fraçao = $numero - $inteiro;

            echo "<p>A parte inteira do número é <strong>$inteiro</strong></p>";
            echo "<p>A parte fracionária do número é <strong>$fraçao</strong></p>";
        ?>

        <input type="button" value="voltar" id="voltar" onclick="voltar()">
    </main>

    <script>
        function voltar() {
            if ('click', voltar) {
                window.history.back()
            }
        }
    </script>
</body>
</html>