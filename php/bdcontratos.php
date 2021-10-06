<?php
    session_start();
    include_once("conexao.php");

	$numero = $_POST['numero'];
    $posto_trabalho = $_POST['posto_trabalho'];
    $valor = $_POST['valor'];
    $cliente = $_POST['cliente'];
    $escala = $_POST['escala'];

    $result = "INSERT INTO contratos (numero,  posto_trabalho, valor, cliente, escala) VALUES ('$numero',  '$posto_trabalho', '$valor', '$cliente', '$escala')";
    $resultado = mysqli_query($conn, $result);
    
    if(mysqli_insert_id($conn)){
        header("Location: contratos.php");
        $_SESSION['msg'] = "<br><p style='color: green; text-align: center'>Contrato cadastrado com sucesso!</p>";
    } else {
        header("Location: contratos.php");
        $_SESSION['msg'] = "<br><p style='color: red; text-align: center'>Erro no Cadastro</p>";
    }
?>