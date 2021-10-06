<?php
    session_start();
    unset($_SESSION['ulogin'],$_SESSION['nome']);
    $_SESSION['msg'] = "<p style='font-size: 18px; color: green'>Deslogado com sucesso!</p>";
    header('location: index.php');
?>