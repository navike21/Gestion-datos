<?php
    include_once("conexion.php");
    session_start();
    
    $user  = $_POST["username"];
    $pass   = md5($_POST["password"]);

    $consultaSql = "SELECT idusuario, nombres, usuario, password, estado FROM usuarios WHERE usuario = :usuario AND password = :password LIMIT 1";

    $sql_usuario = $PDO->prepare($consultaSql);
	$sql_usuario->bindParam(':usuario', $user);
	$sql_usuario->bindParam(':password', $pass);
	$sql_usuario->execute();

	$row = $sql_usuario->rowCount();

	if ($row != 0) {
		$sql_usuario_row 	= $sql_usuario->fetch(PDO::FETCH_ASSOC);
		$idusuario = $sql_usuario_row['idusuario']."+".$sql_usuario_row['nombres'];
		$_SESSION['idusuario'] = $idusuario;
		echo "success_reload&Bienvenido";
	}
	else{
		echo "warning&Error de Información";
	}
?>
