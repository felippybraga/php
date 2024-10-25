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
        <h1>conversor de moedas v2.0</h1>
        <?php
            $inicio = date ("m-d-Y", strtotime("-7 days"));
            $fim = date ("m-d-Y");
        
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            
            $dados = json_decode(file_get_contents($url), true);
        
            //var_dump($dados);
            
            $cotação = $dados ["value"][0]["cotacaoCompra"];

            $padrao = numfmt_create("pt_BR", numberFormatter::CURRENCY);

            $reais = $_GET["valor"];
            $dolar = $reais / $cotação;

            echo "<p>Seus ".numfmt_format_CURRENCY ($padrao, $reais, "BRL")." equivalem a ".numfmt_format_CURRENCY ($padrao, $dolar, "USD")."</p>";
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