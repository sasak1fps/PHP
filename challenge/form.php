<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
    <h1>        resposta     </h1>
<body>
    <?php 
        $n = $_REQUEST["numero"] ?? 0;
        $a = $n - 1;
        $s = $n + 1;    
        echo " <br  >o numero escolhido é <strong>$n</strong>";
        echo " o <br> seu <em>antecessor<em> é <strong>$a</strong>      ";
        echo "<br>o seu <em>sucessor<em> é <strong>$s</strong>          ";    
    
    ?>
    <?php 
    
    
    ?>
    <br>
    <button>&#x2b05;VOLTAR</button>
</body>
</html>        