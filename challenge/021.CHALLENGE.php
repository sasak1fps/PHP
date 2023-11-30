<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULO DE MAQUíNA DO TEMPO</title> <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php  
       $total = $_POST["horas"] ?? 0;
 
    ?>
    <main>
        <form action="021.CHALLENGE.php" method="post">
        <input type="number" name="horas"<?=$total?>>
        <input type="submit" value="CALCULAR">
        </form>
    </main>
    <?php
                $sobra = $total;
        
                $semana = (int)($sobra/604_800);
                $sobra = $sobra % 604_800;
                
                $dia = (int)($sobra/86_400);
                $sobra = $sobra % 86_400;
                
                $hora = (int)($sobra/3_600);
                $sobra = $sobra % 3_600;
               
                $minuto = (int)($sobra/60);
                $sobra = $sobra % 60;
                
                $segundo = $sobra;
        
    ?>
    <section>
        <h1>RESULTADO</h1>
        <p><h2><?=number_format($total , 0 ,"," , "." )?> de segundos equivale : </h2></p>
        
            <li><?= $semana?> semanas</li>
            <li><?= $dia?> dias</li>
            <li><?= $hora?>  horas</li>
            <li><?= $minuto?> minutos</li>
            <li><?= $segundo?> segundo</li>
        
        


    </section>
</body>
</html>