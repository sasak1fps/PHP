<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAIXA</title><link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $numero = $_POST['numero']; 
        ?>
    <main>
        <form action="022CHALLENGE.php" method="post">
            <input type="number" name="numero" value="<?=$numero?>" min="5">
            <input type="submit" value="calcular">
        </form>
    </main>
    <section>
        <h1>RESULTADO</h1>
        <?php 
        
        $rest = $numero;
        $tot100= floor($rest /100);
        $rest %=100;
        $tot50= floor($rest /50);
        $rest %=50;
        $tot20= floor($rest /20);
        $rest %=20;
        $tot10= floor($rest /10);
        $rest %=10;
        $tot5= floor($rest /5);
        $rest %=5;

        echo "o valor a sacar é .",number_format($numero,2,","," .")." voce ira receber : \n<br>";
        echo "$tot100 notas de 100 \n<br>" ;
        echo "$tot50 notas de 50 \n<br>"  ;
        echo "$tot20 notas de 20 \n<br>";
        echo "$tot10 notas de 10 \n<br>";
        echo "$tot5 notas de 5 \n<br>";
        
        ?>
    </section>
</body>
</html>