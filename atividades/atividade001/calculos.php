<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    $numero = $_GET ["num"];
    $antes = $numero - 1;
    $suce = $numero + 1;

    echo "<main>";
        echo "<h1>Resultado final</h1>";
        echo "<p>o numero escolhido é <strong>$numero</strong></p>";
        echo "<p>o <em>antecessor</em> é $antes</p>";
        echo "<p>o <em>sucessor</em> é $suce</p>";
        echo "";
    
?>
    <input type="button" value="voltar" name="vol" id="vol" onclick="voltar()">

    <script>
        function voltar() {
            if('click', voltar) {
                window.history.back()
            }
        }
    </script>
</body>
</html>