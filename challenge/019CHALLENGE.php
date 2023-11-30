<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDADE NACIMESNTO</title><link rel="stylesheet" href="../style.css">

</head>
<body>
    <?php 
        $atual = date("Y");
        $newidade = $_POST["ano"] ?? $atual ; 
        $nacimento = $_POST["nascimento"] ?? 1900 ;
        $newidade2 = $newidade-$nacimento;
          ?>
    <main>
        <form action="019CHALLENGE.php" method="post">
            <label for="nascimento">Em que ano nasceu?</label>
            <input type="number" name="nascimento" min="1900" value="<?=$nacimento?>">
            <label for="ano">Quer saber sua idade em q ano</label>
            <input type="number" name="ano" min="1900" value="<?=$newidade?>">
            <input type="submit" value="enviar">
        </form>
    </main>
    <section>
        <h2>RESULTADO</h2>
        <p>Quem nasceu em <strong><?=$nacimento?></strong> vai ter <strong><?=$newidade2?></strong> anos em <strong><?=$newidade?></strong> </p>
    </section>
</body>
</html>