<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio php 02</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php
        $numero = rand(0, 100);
        echo '<p>Gerando um número aleatório entre 0 e 100...</p>';
        echo "<p>O valor gerado foi <strong>$numero</strong></p>";
        ?>
        <input type="button" value="↺ Gerar outro" onclick="window.location.reload()">
    </main>
</body>
</html>