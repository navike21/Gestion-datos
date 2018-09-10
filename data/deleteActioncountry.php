<?php
	include_once("conexion.php");
	
	echo $idcountry  = $_POST["idcountry"];
  // $email    = $_POST["email"];
  // DELETE FROM `aklsdfjr_country` WHERE `aklsdfjr_country`.`idcountry` = 5"

	$consultaSql = "DELETE FROM aklsdfjr_country WHERE idcountry = :idcountry LIMIT 1";

	$sql_country = $PDO->prepare($consultaSql);
	$sql_country->bindParam(':idcountry', $idcountry);
  $sql_country->execute();
  
  echo "success_reload&Country deleted";

	$row = $sql_country->rowCount();

	// if ($row != 0) {
	// 	$sql_country_row 	= $sql_country->fetch(PDO::FETCH_ASSOC);
	// 	$idusuario = $sql_country_row['idusuario']."+".$sql_country_row['nombres'];
	// 	echo "warning&Country already registered";
	// }
	// else{
  //   $estado = "a";
  //   $sql = $PDO -> prepare("INSERT INTO aklsdfjr_country ( nombre, email, estado ) VALUES ( :nombreRegister, :emailRegister, :estadoRegister )");
  //   $sql->bindParam(':nombreRegister', $country);
  //   $sql->bindParam(':emailRegister', $email);
  //   $sql->bindParam(':estadoRegister', $estado);
  //   $sql->execute();
		
	// }
?>
