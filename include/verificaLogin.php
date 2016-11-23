<?php
    
    session_start();
	$usuario = strip_tags($_POST['email']);
	//$senha = strip_tags($_POST['password']);
	//echo $senha."<br>";
    $senha = sha1(strip_tags($_POST['password']));
	//echo $senha."<br>";
    // conctando ao BD
    include "conecta_mysql.php";

	$query="SELECT * from usuarios WHERE  email=? AND senha=?";

	if($stmt = mysqli_prepare($conexao, $query)) {
		mysqli_stmt_bind_param($stmt, "ss", $usuario, $senha);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_bind_result($stmt, $id, $nome, $email, $senha,$foto);
		mysqli_stmt_fetch($stmt);
	  
		if ($usuario == $email && $senha == sha1(strip_tags($_POST['password']))) {
			$_SESSION['usuario'] = $usuario;
			$_SESSION['senha'] = $senha;
			$_SESSION['nome'] = $nome;
			$logado = $_SESSION['usuario'];
			header('Location: ../admin/index.php');
		}	  
		else {
			echo "Usuario ou senha incorretos";
		}
		mysqli_stmt_close($stmt);
	} else {
		echo "Falha no statment";
	}
	mysqli_close($conexao);
?>