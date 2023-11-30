<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO ANATOMIA DIVISION</title>
    <style>
        table.divisao{ border: 1px solid white;} table.divisao td{ background-color: white; padding: 20px ;background-color: gray; text-align: center; font-size: 2.3rem;} table.divisao  tr:nth-child(1) td:nth-child(2){border-bottom: 3px solid black; border-left: 3px solid black;} table.divisao tr:nth-child(2) tr:nth-child(2){border-left: 3px solid black;} table.divisao tr:nth-child(2) tr:nth-child(1){text-decoration: underline;}
        body{ margin: 0; padding: 0; display: flex;flex-direction: column; margin: auto auto; text-align: center; justify-content: center; align-items: center; margin-top: 25%; background-color: gray; text-decoration: solid; font-style: normal; font-family: sans-serif;} form{font-size: larger; font-weight: bolder; word-wrap: normal; pointer-events: visible; cursor: pointer; }
    </style>
</head>
<body>
    <header><h1><strong>DIVISÃO</strong></h1></header>
    <?php 
        $num1 = $_POST['num1']?? 1;
        $num2 = $_POST['num2']?? 1;
        $res = $num1 / $num2 ;?>

    <form action="0015DESAFIO.php" method="post">
        <input type="number" name="num1" min="0" value="<?=$num1?>"> /
        <input type="number" name="num2" min="1" value="<?=$num2?>">
        <input type="submit" value="enviar">
    </form>

    <section>
        <h2>estrutura da divisão</h2>
        <?php
        $quociente = intdiv($num1,$num2);
        $resto = $num1%$num2;
        ?>
        <table class="divisao">
            <tr>
                <td><?=$num1?></td>
                <td><?=$num2?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>