<?php
    session_start();
    $nome = $_SESSION['nome'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/controle.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/sidebar.css">
    <title>Controle de Perfis</title>
</head>
<body>

    <div class="fundo" >
        <div class="container">
        <div class="op">
            <?php echo "$nome" ?>
        </div>
          <h2>Controle de Perfis</h2>
          <div class="menu">
            <div id="cadastros">
                Cadastros
        </div>
    
        <section class="menu2">
            <div id="left">
                <a href="../php/colaboradores.php"><input type="button" id="botao" class="yellow" value="Colaboradores"></a><br>
                <a href="../php/clientes.php"><input type="button" id="botao" class="yellow" value="Clientes"></a><br>
                <a href="../php/contratos.php"><input type="button" id="botao" class="yellow" value="Contratos"></a> <br>        
            </div>
            <div id="right">
                <a href="../php/postos.php"><input type="button" id="botao" class="yellow" value="Postos de Trabalho"></a><br>
                <a href="../php/alocacoes.php"><input type="button" id="botao" class="yellow" value="Alocações"></a><br>
                <a href="../php/usuarios.php"><input type="button" id="botao" class="yellow" value="Usuários"></a> <br> 
            </div>
        <section>
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
                <a href="#">
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
    </div>

    <script>

        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");

        btn.onclick = function() {
            sidebar.classList.toggle("active");
        }

    </script>

</body>
</html>