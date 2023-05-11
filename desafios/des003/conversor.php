<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio php 03</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php
            $converter = $_REQUEST["reais"] ?? 0;
            $cotacao = 4.94;
            $cotvirg = number_format($converter, 2, ',', '.');
            $convertido = $converter / $cotacao;
            $total = number_format($convertido, 2, ',', '.');
            echo "<p>Seus R$ $cotvirg equivalem a <strong>US$ $total</strong></p>";
        ?>
        <p>*<strong>Cotação fixa de R$ 4,94</strong> informada diretamente no código.</p>
        <input type="button" value="Voltar" onclick="javascript:history.go(-1)">
    </main>
</body>
</html>