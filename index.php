<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Site</title>
</head>
<body>
<section class="container">
    <div class="blocos">
        <div class="left">
            InoDevs <br>Sempre com você!!
        </div>
    </div>

    <div class="blocos">
        <div class="right">
            <form method="POST" action="./php/bdindex.php">
                <label for="">Login</label> <br><input type="text" name="ulogin" placeholder="Digite seu login"  > <br>
                <label for="">Senha</label> <br><input type="password" name="senha" placeholder="Digite sua senha" > <br>
                <input id="botao" type="submit" name="acessar" value="Acessar">
                <?php
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                ?>
            </form>       
        </div>
    </div>
</section>

<div class="referencia">
    <h2>Problemas com login? Mande um email para: inodevs.contact@gmail.com  </h2>
</div>
</body>
</html>
