<?php

	//Include Classes
	include('application/class/quote.class.php'); 
	include('application/class/sql.class.php'); 

	//Merge GET and POST-Parameter together to one array, then assign it to a local variable if not null
	$request = array_merge($_GET, $_POST);  
	$Quote = !empty($request["quote"]) ? $request['quote'] : null;
	$Author = !empty($request["author"]) ? $request['author'] : null;
	$Quoteyear = !empty($request["quoteyear"]) ? $request["quoteyear"] : null;
	$api = !empty($request["api"]);

	//Check if any paramaters for adding quotes were transfered
	if($Quote != null && $Author != null && $Quoteyear != null)
	{
		$quote = new quote($Quote, $Author, $Quoteyear);
		$quote->QuoteToDB();
	}

	//Check if request is a api-request
	if ($api != null) {
		switch($api)
		{
			case 'getAllQuotes':
				$r = sql::getAllQuotes();
				echo $r;
				break;

		}
	}
	
	//If not an API-Request, display normal Website
	if($api == null)
	{
		include("application/sites/standard.php");
	}

?>