<?php
    session_start();
    include_once("conexao.php");

	$nome = $_POST['nome'];
    $login = $_POST['login'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $email = $_POST['email'];

    $result = "INSERT INTO usuarios (nome, ulogin, senha, email) VALUES ('$nome','$login','$senha','$email')";
    $resultado = mysqli_query($conn, $result);
    
    if(mysqli_insert_id($conn)){
        header("Location: usuarios.php");
        $_SESSION['msg'] = "<br><p style='color: green; text-align: center'>Usuário cadastrado com sucesso!</p>";
    } else {
        header("Location: usuarios.php");
        $_SESSION['msg'] = "<br><p style='color: red; text-align: center'>Usuário não foi cadastrado com sucesso.</p>";
    }
?>