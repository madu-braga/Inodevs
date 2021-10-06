<?php
	session_start();
	include_once("conexao.php");
    $acessar = $_POST['acessar'];
	if ($acessar){
		$login = $_POST['ulogin'];
		$senha = $_POST['senha'];
		// echo "$email - $senha";
		if((!empty($login)) AND (!empty($senha))){
			//echo password_hash($senha, PASSWORD_DEFAULT);
			$result_usuario = "SELECT ulogin, nome, email, senha FROM usuarios WHERE ulogin = '$login' LIMIT 1";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			if ($resultado_usuario){
				$row_usuario = mysqli_fetch_assoc($resultado_usuario);
				if(password_verify($senha, $row_usuario['senha'])){
					$_SESSION['ulogin'] = $row_usuario['ulogin'];
                    $_SESSION['nome'] = $row_usuario['nome'];
                    $_SESSION['email'] = $row_usuario['email'];
					header('location: presenca.php');
				} else {
					$_SESSION['msg'] = "<p style='font-size: 18px; color: red'>Login ou senha incorreta!</p>";
					header('Location:../index.php');
				}
			}
		} else {
			$_SESSION['msg'] = "<p style='font-size: 18px; color: red'>Preencher login ou senha!</p>";
			header('Location:../index.php');
		}
	} else {
		$_SESSION['msg'] = "<p style='font-size: 18px; color: red'>Página não encontrada!</p>";
		header('Location:../index.php');
	}

?>