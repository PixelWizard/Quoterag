<?php

	//Include Classes
	include('application/class/quote.class.php'); 
	include('application/class/sql.class.php'); 
	include('application/class/router.class.php');
	include('application/class/userreq.class.php');
	include('application/class/api.class.php');

	//Merge GET and POST-Parameter together to one array, then assign it to a local variable if not null
	$request = array_merge($_GET, $_POST);  

	$router = new router($request);
	echo $router->run();

?>