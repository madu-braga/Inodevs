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
            <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
            <link rel="stylesheet" href="../css/sidebar.css">
            <title>Presença</title>
        </head>
        <body>
            <div class="fundo" >
                <div class="container">
                    <div class="op">
                        $nome
                    </div>
                        <div class = "caixa">
                            <div id= "meurelogio" class="relogio" onload="Tempo()"></div>
                            <script src="../js/relogio.js"></script>
                        </div>
                
                        <div class = "bloco">
                            <h1>Marque sua presença: </h1>
                        <form method ="POST" action="bdpresenca.php">
                            <input id="botao" type="submit" value="Marcar" class="yellow">
                        </form>
                        </div>
                    </div>
            </div>
            <div class="sidebar">
        <div class="logo_content">
            <i class='bx bx1-c-plus-plus'></i>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav_list">
            <li>
                <a href="../php/quadropresenca/quadropresenca.php">
                    <i class='bx bx-clipboard' ></i>
                    <span class="links_name">Relatório</span>
                </a>
                <span class="tooltip">Relatório</span>
            </li>
            <li>
                <a href="../html/edicoes.html">
                    <i class='bx bx-edit-alt'></i>
                    <span class="links_name">Edições</span>
                </a>
                <span class="tooltip">Edições</span>
            </li> 
            <li>
                <a href="../php/presenca.php">
                    <i class='bx bx-calendar'></i>
                    <span class="links_name">Presenças</span>
                </a>
                <span class="tooltip">Presenças</span>
            </li>
            <li>
                <a href="../php/controle.php">
                    <i class='bx bx-check-square' ></i>
                    <span class="links_name">Perfis</span>
                </a>
                <span class="tooltip">Perfis</span>
            </li>
            <li>
                <a href="../index.php">
                    <i class='bx bx-exit'></i>
                    <span class="links_name">Sair</span>
                </a>
                <span class="tooltip">Sair</span>
            </li>
        </ul>
        <script>
        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");
        btn.onclick = function() {
            sidebar.classList.toggle("active");
        }
        </script>
        </body>
        </html>
        EOT;
        } else {
            $_SESSION['msg'] = "<p style='color: red; font-size: 18px'> Você precisa estar logado!</p>";
            header('location: index.php');
        }
?>