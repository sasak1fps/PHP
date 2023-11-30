<!DOCTYPE html>
<html lang="ru-ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPER</title><style>
        body{width: 100%; height: 100%; margin: 0; padding: 0; display: flex; flex-direction: column; align-items: center; justify-content: center; margin: auto auto; text-align: center; box-sizing: border-box;} h1{text-align: center; align-items: center;  justify-content: center; display: grid; grid-row: 1;}
    </style>
</head>
<body>
    <pre>
    <main>
        <form action="0013SUPERGLOBAL.php" method="post">
            <label for="nome">nome</label>
            <input type="text" name="nome" id="nome">
            <label for="senha">senha</label>
            <input type="password" name="senha" id="">
            <input type="submit" value="enviar">
        </form>
    </main>
    <?php 
    setcookie("diadasemana","segunda" , time() + 3600 );
    session_start(); $_SESSION["teste"] ="funcionou!!";
    
    echo "<h1>SUPERGLOBAL</h1>"; echo "\n";
    $dados = $_POST["nome"]; echo "\n";

    var_dump($_POST);echo "\n";
    $dado = $_POST["senha"];echo "\n";
    
    var_dump($_GET);echo "\n"; 
    
    var_dump($_REQUEST);echo "\n";
    
    echo"<h2>SERVER<h2>";
    var_dump($_SERVER);
        
    echo"<h1>env<h1>";
    var_dump($_ENV);
    
    echo "<h1>COOkie</h1>";
     var_dump($_COOKIE);echo "\n";
    
     echo"<h1>sessao<h1>";
     var_dump($_SESSION);echo "\n";

     echo "<h1>GLOBAL</h1>";
     var_dump($GLOBALS);








    ?></pre>
</body>
</html>