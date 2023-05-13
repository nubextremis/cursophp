<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio php 08</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num = $_GET["numero"] ?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" value="<?=$num?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $rquadrada = sqrt($num);
            $rcubica = pow($num, 1/3);
            print "<p>Analisando o <strong>número $num</strong> temos: </p>";
            echo "<ul>
                    <li>A sua raiz quadrada é <strong>" . number_format($rquadrada, 3, ",", ".") . "</strong></li>
                    <li>A sua raiz cúbica é <strong>". number_format($rcubica, 3, ",", ".") . "</strong></li>
                </ul>";
        ?>
    </section>
</body>
</html>