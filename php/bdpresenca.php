<?php
    session_start();
    include_once("conexao.php");

    $dia = "d" . date("j");
    $nome = $_SESSION['nome'];
    $result = "UPDATE presenca SET $dia = 'P' WHERE colaborador = '$nome' LIMIT 1";
    $resultado = mysqli_query($conn, $result);

    header("Location: presenca.php");
?>
