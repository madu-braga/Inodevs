<?php
    session_start();
    include_once("conexao.php");

	$associacao = $_POST['associacao'];
    $tipo_de_cobertura = $_POST['tipo_de_cobertura'];

    $result = "INSERT INTO alocacoes (associacao, tipo_de_cobertura) VALUES ('$associacao', '$tipo_de_cobertura')";
    $resultado = mysqli_query($conn, $result);
    
    if(mysqli_insert_id($conn)){
        header("Location: alocacoes.php");
        $_SESSION['msg'] = "<br><p style='color: green; text-align: center'>Alocação cadastrada com sucesso!</p>";
    } else {
        header("Location: alocacoes.php");
        $_SESSION['msg'] = "<br><p style='color: red; text-align: center'>Erro no Cadastro</p>";
    }
?>