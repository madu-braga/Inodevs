<?php
    session_start();
    include_once("../conexao.php");

    $sql_code_posto = "SELECT * FROM presenca_posto";
    $sql_query_posto = $conn->query($sql_code_posto) or die($mysqli->error);
    $linha_posto = $sql_query_posto->fetch_assoc();

    do {
        $id_posto = $linha_posto['id'];
        $result = "UPDATE presenca_posto SET d1 = '', d2 ='', d3 ='', d4 ='', d5 ='', d6 ='', d7 ='', d8 ='', d9 = '', d10 ='', d11 ='', d12 ='', d13 ='', d14 ='', d15 ='', d16 ='', d17 ='', d18 ='', d19 ='', d20 ='', d21 ='', d22 ='', d23 ='', d24 ='', d25='', d26 ='', d27 ='', d28 ='', d29 ='', d30 ='', d31 ='' WHERE id='$id_posto'";
        $resultado = mysqli_query($conn, $result);
    }  while($linha_posto=$sql_query_posto->fetch_assoc());

    $sql_code_colaborador = "SELECT * FROM presenca";
    $sql_query_colaborador = $conn->query($sql_code_colaborador) or die($mysqli->error);
    $linha_colaborador = $sql_query_colaborador->fetch_assoc();

    do {
        $id_colaborador = $linha_colaborador['id'];
        $result = "UPDATE presenca SET d1 = '', d2 ='', d3 ='', d4 ='', d5 ='', d6 ='', d7 ='', d8 ='', d9 = '', d10 ='', d11 ='', d12 ='', d13 ='', d14 ='', d15 ='', d16 ='', d17 ='', d18 ='', d19 ='', d20 ='', d21 ='', d22 ='', d23 ='', d24 ='', d25='', d26 ='', d27 ='', d28 ='', d29 ='', d30 ='', d31 ='' WHERE id='$id_colaborador'";
        $resultado = mysqli_query($conn, $result);
    }  while($linha_colaborador=$sql_query_colaborador->fetch_assoc());
    
        echo "
        <script>
            alert('Todos os registros foram apagados com sucesso!');
            location.href='quadropresenca.php';
        </script>
        ";

?>