<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/clientes.css">
    <title>Clientes</title>
   
</head>
<body>
    <div class="m-box">
        <a href="controle.php"><input  id="btn-submit1" type="submit" value="Retornar"></a>
    </div>
    <br><br><br>
    <div id="main-container">
        <h1>Clientes</h1><BR>
        <form  method="POST" action="bdclientes.php">
            
            <div class="full-box">
                <label for="name">Razão Social</label>
                <input type="text" name="razao_social" placeholder="Ex.: Gerente de vendas" required>
            </div>
            
            <div class="full-box">
                <label for="fantasia">Nome Fantasia</label>
                <input type="text" name="nome_fantasia" placeholder="Ex.: Inodevs" required>
            </div>
            
            <div class="half-box">
                <label for="cnpj">CNPJ</label><br>
                <input type="text" name="cnpj" placeholder="Ex.: 000.000.000/0000-00" required>
            </div>
           
            <div class="half-box">
                <label for="contato">Contato</label><br>
                <input type="text" name="contato" placeholder="Ex.: (00) 00000-0000" required>
            </div>
            
            <div class="full-box">
                <label for="endereço">Endereço</label>
                <input type="text" name="endereco"  placeholder="Ex.: Rua Almirante Junior, 101" required>
            
            </div>
                    
            <div class="middle-box" >
                <input id="btn-submit" type="submit" value="Cadastrar">
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