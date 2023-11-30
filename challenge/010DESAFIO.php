<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RANDOMIZANDO</title>
    <style>body{ background-color: gray; align-items: center; justify-content: center; text-align: center; box-sizing: border-box; margin-top: 400px;} div:hover{ background-color: greenyellow; text-decoration: dashed; transition: 2s ; animation: infinite 2s; color: white;}
        div{
            text-align: center; justify-content: center; align-items: center; display: flex;
            background-color: black; color: wheat; width: 500px; margin: auto; padding: auto; border-radius: 10px; box-shadow: 3px 2px 2px red;
        }
        button#bt{ width: 100px; margin-top: 35px; padding: auto; box-shadow: 2px 2px 2px black; text-size-adjust: 2em; text-decoration: double; font-family: 'Times New Roman', Times, serif; font-weight: bolder; }
        button:hover{background-color: greenyellow; text-decoration: overline; color: gray; animation: infinite 2s; animation-duration: 5ms; transform: perspective(wordwrap);}
    </style>
</head>
<body>
    <section>
        <div>
            <span>
                <?php 
                    $num = 0;
                    $num1= 100;
                    $res = rand($num , $num1);
                    echo "gerando um numero aleatorio entre $num e $num1...\n<br>";
                    echo "o numero aleatorio sorteado é $res<br>"
                ?>
                <span>
                    <?php 
                    $a = 0;
                    $b= 1000;
                    $r = mt_rand($a,$b);
                    echo "gerando um numero aleatorio entre $a e $b...\n<br>";
                    echo "o numero aleatorio sorteado é $r<br>"               
                    ?>
                    <span>
                        <?php 
                        $x1 = 0 ;
                        $x2 = 9999999;
                        $z= random_int($x1,$x2);
                        echo "gerando um numero aleatorio criptografados entre $x1 e $x2...\n<br>";
                        echo "o numero aleatorio sorteado é $z<br>"             
                        ?>
                    </span>
                </span>
                <button onclick="javascrpit:document.location.reload()">&#x1f504;Gerar outro</button>
            </span>
        </div>
        <button id="bt" onclick="javascript:window.history.back()">BACK</button>
    </section>
</body>
</html>