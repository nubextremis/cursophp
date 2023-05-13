<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio php 010</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $anonasc = $_GET["anonasc"] ?? date('Y');
            $anofut = $_GET["anofut"] ?? date('Y');
        ?>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="anonasc">Em que ano você nasceu?</label>
            <input type="number" name="anonasc" id="anonasc" value="<?=$anonasc?>">
            <label for="anofut">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=date('Y')?></strong>)</label>
            <input type="number" name="anofut" id="anofut" value="<?=$anofut?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $idade = $anofut - $anonasc;
            print "Quem nasceu em $anonasc vai ter <strong>$idade anos</strong> em $anofut!";
        ?>
    </section>
</body>
</html>