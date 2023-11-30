<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAIZQUADRADE RAIZ CUBICA</title><link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php  $valor= $_REQUEST['num']?? 0 ?>
<main>
                <center>      <h1>RAIZ</h1>         </center>
<form action="017DESAFIO.php" method="post"> 
    <input type="number" name="num" min="0" value="">
    <input type="submit" value="enviar">
</form>

</main>
    <section>
        <h1>RESULTADO</h1>
        <?php 
        $valo = $_POST["num"];
        $val= sqrt($valo);
        $rcub= $valor **(1/3);
        echo "A RAIZ QUADRADA DE <strong>$valo</strong> é <strong>$val</strong>\n <br>";
        echo "A RAIZ CUBICA DE <strong>$valo</strong> é <strong>$rcub</strong>\n";
        ?>
    </section>
    <button onclick="javascript:history.go(-1)">VOLTAR</button>
</body>
</html>