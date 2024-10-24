<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>convertido</title>
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
            height: 210px;
        }
    </style>
</head>
<body>
    <main>
        <h1>conversor de moedas v1.0</h1>
        <?php
            $rais = number_format($_GET["valor"], 2, ",", ".");
            $dolar = number_format ($_GET ["valor"] / 5.69, 2, ",", ".");
   
            echo "<p>Seus R$ $rais equivalem a US$ $dolar</p>";
        ?>
        <p><strong>*cotação fixa de R$5,69</strong> informada diretamente no codigo</p>

        <input type="button" value="voltar" onclick="voltar()" id="voltar">
    </main>

    <script>
        function voltar(){
            if ('click', voltar){
                window.history.back()
            }
        }
    </script>
</body>
</html>