<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio php 07</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salmin = 1380.00;
        $salario = $_GET["salario"] ?? 0;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Salário(R$)</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>">
            <p>Considerando o salário mínimo de <strong>R$1.380,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $salmintot = $salario / $salmin;
            $salminint = (int) $salmintot;
            $restante = $salario - ($salminint * $salmin);
            echo "Quem recebe um salário de R$" . number_format($salario, 2, ",", ".") . " <strong>ganha $salminint salários mínimos</strong> + R$ " . number_format($restante, 2, ",", ".") . ".";
        ?>
    </section>
</body>
</html>