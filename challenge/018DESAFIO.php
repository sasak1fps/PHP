<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDIA ARITMETICA</title><link rel="stylesheet" href="../style.css">

</head>
<body>
    <?php 
    $v1 = $_POST['v1'] ??0;
    $v2 = $_POST['v2'] ??0;      
    $p1 = $_POST['p1'] ??0;      
    $p2 = $_POST['p2'] ??0;      
    ?>
    <main>
        <form action="018DESAFIO.php" method="post">
            <input type="number" name="v1" require value="<?=$v1?>">
            <input type="number" name="p1" require value="<?=$p1 ?>">
            <input type="number" name="v2" require value="<?=$v2?>">
           <input type="number" name="p2" require  value="<?=$p2?>">
           <input type="submit" value="enviar">
         </form>
    </main>       <section>
            <h2>MEDIA PONDERADA</h2>
           <ul>
                <li>
                    a <strong>media aritimetica</strong> entre valore {<?= ($v1 + $v2) / 2 ?>}
                </li>
                <li>
                    a<strong> media aritimetica ponderada</strong> com pesos{<?= $p1?>} e {<?= $p2?>} igual a {<?=($v1 * $p1 + $v2*$p2)/($p1+$p2)?>}
                </li>
           </ul> 
        </section>
</body>
</html>