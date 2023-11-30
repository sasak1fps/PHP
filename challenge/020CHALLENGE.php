<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORCENTAGEM</title><link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
      $preco = $_POST["preco"] ?? "1" ;
        $range = $_POST["rang"] ?? "50" ;
    ?>
    <main>
        <form action="020CHALLENGE.php" method="post">

            <input type="number" name="preco" min="0.010" step="0.01" value="<?= $preco?>">

            <label for="rang">QUAL SERA PERCENTUAL? <strong><span id ="p">?</span>%</strong></label>

            <input type="range" name="rang" id="rang" min="0" max="100" step="5" oninput="mudavalor()">

            <input type="submit" value="reajustar">
            
        </form>
    </main>
    <?php 
          $desc = ($preco * $range) / 100;
          $newpreco = $preco + $desc;
    ?>
    <section>
        <h2>Resultado</h2>
        <p>o produto custva R$<?=$preco?> , com <?=$desc?>% de aumento vai passar a custar R$<?=$newpreco?> agora</p>
    </section>

    <script>
        mudavalor()
        function mudavalor(){
            document.getElementById('p');
            p.innerText = rang.value;
        }
    </script>
</body>
</html>