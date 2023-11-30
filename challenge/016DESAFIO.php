<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SALARIO MINIMO</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $minimo = 1_380.60;
        $salario =$_REQUEST["sal"]??0;
    ?>
    <main>
        <h1>Informe seu salario</h1>
        <form action="016DESAFIO.php" method="post">
        <label for="sal">SALARIO: (R$)</label>
        <input type="number" name="sal" step="0.01" value="<?=$salario?>">
        <p>considerando o salario minimo de <strong>R$<?=number_format($minimo,2,",",".")?></strong></p>
        <input type="submit" value="calcular">
        </form>
    </main>
    <section>
        <h2>RESULTADO</h2>
        <?php 
            $tot = intdiv($salario , $minimo);
            $dif = $salario % $minimo; 
            echo "<p>GANHA $tot salarios minimos  + R\$ ".number_format($dif,2,",",".").".</p>";
        ?>
    </section>
</body>
</html>