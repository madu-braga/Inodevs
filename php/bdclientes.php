<?php
    session_start();
    include_once("conexao.php");

	$razao_social = $_POST['razao_social'];
    $nome_fantasia = $_POST['nome_fantasia'];
    $cnpj = $_POST['cnpj'];
    $endereco = $_POST['endereco'];
    $contato = $_POST['contato'];

    $result = "INSERT INTO clientes (razao_social, nome_fantasia, cnpj, endereco, contato) VALUES ('$razao_social', '$nome_fantasia', '$cnpj', '$endereco', '$contato')";
    $resultado = mysqli_query($conn, $result);
    
    if(mysqli_insert_id($conn)){
        header("Location: clientes.php");
        $_SESSION['msg'] = "<br><p style='color: green; text-align: center'>Usuário cadastrado com sucesso!</p>";
    } 
    else {
        header("Location: clientes.php");
        $_SESSION['msg'] = "<br><p style='color: red; text-align: center'>Cliente não foi cadastrado.</p>";
    }
?>