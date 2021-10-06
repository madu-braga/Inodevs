<?php
    session_start();
    include_once("conexao.php");

	$descricao = $_POST['descricao'];
    $escala = $_POST['escala'];
    $numero_colab = $_POST['numero_colab'];
    $nome_posto = $_POST['nome_posto'];

    $result = "INSERT INTO postos_de_trabalho (descricao, escala, numero_colab, nome_posto) VALUES ('$descricao','$escala','$numero_colab','$nome_posto')";
    $resultado = mysqli_query($conn, $result);

    $result = "INSERT INTO presenca_posto (posto_de_trabalho, descricao) VALUES ('$nome_posto','$descricao')";
    $resultado = mysqli_query($conn, $result);
    
    if(mysqli_insert_id($conn)){
        header("Location: postos.php");
        $_SESSION['msg'] = "<br><p style='color: green; text-align: center'>Posto de Trabalho cadastrado com sucesso!</p>";
    } else {
        header("Location: postos.php");
        $_SESSION['msg'] = "<br><p style='color: red; text-align: center'>Erro no Cadastro</p>";
    }
?>