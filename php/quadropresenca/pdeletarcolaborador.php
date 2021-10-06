<?php
session_start();
include_once("../conexao.php");

$id = $_GET['id'];
if (!empty($id)){
    $result_colaborador = "DELETE FROM presenca WHERE id='$id'";
    $resultado_colaborador = mysqli_query($conn, $result_colaborador);
    if(mysqli_affected_rows($conn)){
        echo "
        <script>
            alert('O colaborador deletado com sucesso!');
            location.href='quadropresenca.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Falha ao deletar.');
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
