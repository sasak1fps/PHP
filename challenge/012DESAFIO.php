<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aaaaaaaaaaaa</title>
</head>
<body>
            <h1>analisar</h1>
<form action="012DESAFIO.php" method="post">     
<label for="n">numero:</label>
<input type="number" name="n" id="n" step="0.01">
<input type="submit" value="enviar" >
</form>

    <pre>
        <?php
            $num = $_POST["n"] ?? 0 ;
            echo "<p>analisando numero $num!!</p>";
            $int = (int)$num;
            echo "<p>parte inteira $int </p>";
            $fra = $num - $int;
            echo "<p>parte fracionaria de $fra</p>";
        
        
        ?>
    </pre>
    <button onclick="javascript:history.go(-1)">Voltar</button>
</body>
</html>