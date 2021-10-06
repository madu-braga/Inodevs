<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/postos.css?v=<? echo time() ?>">
    <title>Postos de trabalho</title>
   
</head>
<body>
    <div class="m-box">
        <a href="../html/controle.html"><input  id="btn-submit1" type="submit" value="Retornar"></a>
    </div>
    <br><br><br>
    <div id="main-container">
        <h1>Postos de trabalho</h1><BR>
        <form  method="POST" action="bdpostos.php">
            <div class="full-box">
            <label for="name">Nome do Posto</label>
            <input type="text" name="nome_posto" placeholder="Digite o nome do posto" required>
            </div>
            <div class="full-box">
            <label for="name">Descrição</label>
            <input type="text" name="descricao" placeholder="Digite a descrição" required>
            </div>
            <div class="half-box spacing">
                <label for="endereço">Escala</label>
                <input type="text" name="escala" placeholder="Ex: 1502556561" required>
            </div>
            <div class="half-box spacing">
                <label for="endereço">Número de colaboradores</label>
                <input type="text" name="numero_colab" placeholder="Ex: 1502556561" required>
            </div>
            <div class="middle-box">
                <input type="submit" value="Cadastrar">
            </div>
        </form>
    </div>


  <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>

    <div class="left">
        
    </div>
</body>
</html>