<?php
session_start();
include_once("../conexao.php");

$id = $_GET['id'];
if (!empty($id)){
    $result_posto = "DELETE FROM presenca_posto WHERE id='$id'";
    $resultado_posto = mysqli_query($conn, $result_posto);
    if(mysqli_affected_rows($conn)){
        echo "
        <script>
            alert('O usuário deletado com sucesso!');
            location.href='quadropresenca.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('O usuário não foi deletado com sucesso.');
            location.href='quadropresenca.php';
        </script>
        ";
        }
} else {
    echo "
    <script>
        alert('Necessário selecionar um usuário.');
        location.href='quadropresenca.php';
    </script>
    ";
}

?>