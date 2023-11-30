<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Real para Dólar</title>
</head>
<body>
    
    <h1>Conversor de Real para Dólar</h1>
    <!-- Formulário para entrada de dados -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="012desafio.php">quantos dinheiro voce tem?</label>
    <input type="number" name="number" id="" step="0.01">
    <input type="submit" value="enviar">
    </form>
        <?php
            $form = $_REQUEST["number"]??0;
            $dolar = 4.91; 
            $res = $form / $dolar; 
            echo    "$res";
            
        
        ?>

<button onclick="javascript:history.back(-1)">&#x2b05;VOLTAR</button>
</body>
</html>
