<?php
    session_start();
    include_once("conexao.php");

    $matricula = $_POST['matricula'];
    $cpf = $_POST['cpf'];
    $nome_completo = $_POST['nome_completo'];
    $data_admissao = $_POST['data_admissao'];
    $data_demissao = $_POST['data_demissao'];
    $funcao = $_POST["funcao"];
    $situacao = $_POST["situacao"];
    $tipo_cobertura = $_POST["tipo_cobertura"];
    $situacaobd = str_replace("ã", "a", "$situacao");
    $posto_trabalho = $_POST['posto_trabalho'];

    $result = "INSERT INTO colaboradores (cpf, matricula, nome_completo, data_admissao, data_demissao, funcao, situacao_cadastro, tipo_cobertura, posto_trabalho) VALUES ('$cpf', '$matricula', '$nome_completo','$data_admissao', '$data_demissao','$funcao', '$situacaobd', '$tipo_cobertura','$posto_trabalho')";
    $resultado = mysqli_query($conn, $result);

    $result = "INSERT INTO presenca (posto_de_trabalho, colaborador) VALUES ('$posto_trabalho', '$nome_completo')";
    $resultado = mysqli_query($conn, $result);


    if(mysqli_insert_id($conn)){
        header("Location: colaboradores.php");
        $_SESSION['msg'] = "<br><p style='color: green; text-align: center'>Colaborador cadastrado com sucesso!</p>";
    } else {
        header("Location: colaboradores.php");
        $_SESSION['msg'] = "<br><p style='color: red; text-align: center'>Erro no Cadastro</p>";
    }
?>