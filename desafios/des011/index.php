<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio php 011</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $valor = $_GET["valor"] ?? 0;
            $reajuste = $_GET["reajuste"] ?? 0;
        ?>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Preço do Produto (R$)</label>
            <input type="number" name="valor" id="valor" value="<?=$valor?>">
            <label for="reajuste">Qual será o percentual de reajuste? (<strong><span id="porcentagem">0%</span></strong>)</label>
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" value="0" onchange="mudou()">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            $ajustado = $valor + ($valor * ($reajuste / 100));
            echo "O produto que custava R$" . number_format($valor, 2, ",", ".") . ", com <strong>$reajuste% de aumento</strong> vai passar a custar <strong>R$" . number_format($ajustado, 2, ",", ".") . "</strong> a partir de agora."
        ?>
    </section>

    <script>
        var input = document.getElementById('reajuste'),
            valor = document.getElementById('porcentagem');

        // Adicionando mudança em tempo real input range
        input.addEventListener("input", function () {
            valor.innerHTML = input.value + "%";
        }, false);
    </script>
</body>
</html>