<?php

	class userreq
	{

		public function __construct()
		{

		}

		public function display()
		{
			$file = "application/sites/standard.php";
			ob_start();  
        	      
        	include $file;  
        	$output = ob_get_contents();  
        	ob_end_clean();  
        	  
        	return $output;  
		}

	}

?>