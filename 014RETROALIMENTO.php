<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RETRO ALIMRNTO</title>
    <style>
        body{ display: flex; flex-direction: column; align-items: center; text-align: center; margin-top: 1%; box-sizing: border-box; box-shadow: 2px 2px 2px black;}
    </style>
</head>
<body>
<?php 
$nn1 = $_POST['n1']??0;
$nn2 =$_POST['n2']??0;

?>                  <h1>SOMANDO VALORES</h1>
<form action="014RETROALIMENTO.php" method="post">    
        <input type="number" name="n1" value="<?=$nn1?>">
        <input type="number" name="n2" value="<?=$nn2?>">
        <input type="submit" value="enviar" >
</form>
<section>
    <h1>resultado</h1>
    <?php
        echo"soma" ;
        $soma = $nn1 + $nn2;
        echo "<h1>$soma</h1>";
        
        echo"multi";
        $multi = $nn1 * $nn2;
        echo "<h1>$multi</h1>";
        
        echo"divisao";
        $div = $nn1 / $nn2;
        echo "<h1>$div</h1>";
        
        echo"raiz²";
        $sqr = sqrt($nn1 + $nn2);
        echo "<h1>$sqr</h1>";
        
        echo"seno";
        $sen = sin($nn1 + $nn2);
        echo "<h1>$sen</h1>";
        
        echo"coseno";
        $cos = cos($nn1 + $nn2);
        echo "<h1>$cos</h1>";
        
        echo"tang";
        $tan = tan($nn1 - $nn2);
        echo "<h1>$tan</h1>";
        
        echo"RADSEN";
        $RADS = sin(rad2deg($nn1 + $nn2));
        echo "<h1>$RADS</h1>";
        
        echo"RADC";
        $RADC = cos(rad2deg($nn1 + $nn2));
        echo "<h1>$RADC</h1>";
        
        echo"RADT";
        $RADT = tan(rad2deg($nn1 + $nn2));
        echo "<h1>$RADT</h1>";
        
    ?>
</section>
</body>
</html>