<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio php 09</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET["val1"] ?? 0;
        $valor2 = $_GET["val2"] ?? 0;
        $peso1 = $_GET['peso1'] ?? 1;
        $peso2 = $_GET['peso2'] ?? 1;
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="val1">1° Valor</label>
            <input type="number" name="val1" id="val1" value="<?=$valor1?>">
            <label for="peso1">1° Peso</label>
            <input type="number" name="peso1" id="peso1" value="<?=$peso1?>">
            <label for="val2">2° Valor</label>
            <input type="number" name="val2" id="val2" value="<?=$valor2?>">
            <label for="peso2">2° Peso</label>
            <input type="number" name="peso2" id="peso2" value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
            $medsimples = ($valor1 + $valor2)/ 2;
            $medponderada = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2);
            print "<p>Analisando os valores $valor1 e $valor2:</p>";
            echo "<ul>
                    <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a " . number_format($medsimples, 2, ",", ".") . ".</li>
                    <li>A <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual a " . number_format($medponderada, 2, ",", ".") . ".</li>
                </ul>";
        ?>
    </section>
</body>
</html>