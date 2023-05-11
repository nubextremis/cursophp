<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio php 01</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <?php
            $numeroprin = $_GET["numero"] ?? 0;
            $numseguinte = $numeroprin + 1;
            $numanterior = $numeroprin - 1;
            echo "<p>Você digitou o número <strong>$numeroprin</strong>!</p>";
            echo "<p>Seu <em>antecessor</em> é $numanterior.</p>";
            echo "<p>E seu <em>sucessor</em> é $numseguinte.</p>";
        ?>
        <input type="button" value="⇦ Voltar" onclick="javascript:history.go(-1)">
    </main>
</body>
</html>