<?php

	class sql
	{

		//Variabeln
		const DB_USERNAME = "root";
		const DB_PASSWORD = "";
		const DB_HOST = "localhost";
		const DB_NAME = "db_quoterag";

		//Methoden
		public static function connect()
		{
        	$con = mysqli_connect(self::DB_HOST, self::DB_USERNAME, self::DB_PASSWORD, self::DB_NAME);
        	if (!$con){
        	    die('Could not connect: ' . mysql_error());
        	}
        	return $con;
		}

		public static function addQuote($Quote, $Author, $Quoteyear)
		{	
			$s_Quote = htmlspecialchars($Quote);
			$s_Author = htmlspecialchars($Author);
			$s_Quoteyear = htmlspecialchars($Quoteyear);

			$connection = sql::connect();
			$q_addData = "INSERT INTO `db_quoterag`.`t_quotes` (`f_quote`, `f_author`, `f_quoteyear`) VALUES ('".$s_Quote."', '".$s_Author."', '".$s_Quoteyear."')";
			$r_addData = mysqli_query($connection, $q_addData);
			if($r_addData != true)
			{
				mysqli_close($connection);
				return false;
			}
			mysqli_close($connection);
			return true;
		}

		public static function getAllQuotes()
		{
			$quotes = array();
			$connection = sql::connect();
			$q_getData = "select * from t_quotes";
			$r_getData = mysqli_query($connection, $q_getData);

        	if ($r_getData != null){
        	    while($row = mysqli_fetch_array($r_getData)){
        	            $quotes[] = array("f_quote"=>$row['f_quote'], "f_author"=>$row['f_author'], "f_quoteyear"=>$row['f_quoteyear']);
        	        }
        	}
        	mysqli_close($connection);
    		return(json_encode($quotes));
		}

	}

?>