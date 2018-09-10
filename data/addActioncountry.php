<?php
	include_once("conexion.php");
	
	$country  = $_POST["countries"];
	$email    = $_POST["email"];

	$consultaSql = "SELECT nombre, email FROM aklsdfjr_country WHERE nombre = :nombre OR email = :email LIMIT 1";

	$sql_country = $PDO->prepare($consultaSql);
	$sql_country->bindParam(':nombre', $country);
	$sql_country->bindParam(':email', $email);
	$sql_country->execute();

	$row = $sql_country->rowCount();

	if ($row != 0) {
		$sql_country_row 	= $sql_country->fetch(PDO::FETCH_ASSOC);
		$idusuario = $sql_country_row['idusuario']."+".$sql_country_row['nombres'];
		echo "warning&Country already registered";
	}
	else{
    $estado = "a";
    $sql = $PDO -> prepare("INSERT INTO aklsdfjr_country ( nombre, email, estado ) VALUES ( :nombreRegister, :emailRegister, :estadoRegister )");
    $sql->bindParam(':nombreRegister', $country);
    $sql->bindParam(':emailRegister', $email);
    $sql->bindParam(':estadoRegister', $estado);
    $sql->execute();
		echo "success_reload&Country saved";
	}
?>
