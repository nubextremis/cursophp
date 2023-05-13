<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio php 05</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $numero = $_REQUEST["numero"];

            
            // $inteiro = intval($numero);
            $inteiro = (int) $numero;
            $resto = $numero - $inteiro;


            echo "<p>Analisando o número <strong>" . number_format($numero, 3, ",", ".") . "</strong> informado pelo usuário:</p>";
            echo "<ul>
                <li>A parte inteira do número é <strong>" . number_format($inteiro, 0, ",", "."). "</strong>.</li>
                <li>A parte fracionária do número é <strong>" . number_format($resto, 3, ",", ".") . "</strong></li>
            </ul>";
        ?>
        <input type="button" value="Voltar" onclick="javascript:history.go(-1)">
    </main>
</body>
</html>