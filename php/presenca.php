<?php
    session_start();
    $nome = $_SESSION['nome'];
    if(!empty($_SESSION['ulogin'])){
        echo <<<EOT
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../css/presenca.css">
            <title>Presença</title>
        </head>
        <body>
            <div class="fundo" >
                <div class="container">
                    <div class="menu">
                        <div id="op">
                        <p style='font-size: 20px;'>$nome</p>
                        </div>
                        <div id="deslogar">
                            <a href="../index.php"><input id="botao" class="blue" value="Deslogar"></a>
                        </div>
                        <div class = "caixa">
                            <div id= "meurelogio" class="relogio" onload="Tempo()"></div>
                            <script src="../js/relogio.js"></script>
                        </div>
                
                        <div class = "bloco">
                            <h1>Marque sua presença: </h1>
                        <form method ="POST" action="bdpresenca.php">
                            <input id="botao" type="submit" value="Enviar" class="yellow">
                        </form>
                        </div>
                    </div>
                <div>
            </div>
            <div class="left">
                <div class="barra">
                    <nav>
                        <a href="./presenca.php"><div class="link" id="selected"><img src="../img/calendar.png" alt=""></div></a>
                        <a href="../html/controle.html"><div class="link"><img src="../img/notebook.png" ></div></a>
                    </nav>
                </div>
            </div>
        </body>
        </html>
        EOT;
        } else {
            $_SESSION['msg'] = "<p style='color: red; font-size: 18px'> Você precisa estar logado!</p>";
            header('location: index.php');
        }
?>