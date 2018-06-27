<?php
    $bdname = "gestion_datos";
    $user   = "root";
    $pass   = "";

	set_exception_handler(function($e) {
		error_log($e->getMessage());
		exit('Something weird happened'); //something a user can understand
	});
    
	$dsn = "mysql:host=localhost;dbname=".$bdname.";charset=utf8mb4";
	$options = [
		PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
		PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
	];
	// $PDO = new PDO($dsn, "root", "", $options);
	$PDO = new PDO($dsn, $user, $pass, $options);

?>
