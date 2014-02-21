<?php

	class quote
	{

		//Membervariabeln
		private $m_Quote;
		private $m_Author;
		private $m_Quoteyear;

		//Konstruktoren
		public function __construct($Quote, $Author, $Quoteyear)
		{
			$this->m_Quote = $Quote;
			$this->m_Author = $Author;
			$this->m_Quoteyear = $Quoteyear;
		}

		//Methoden
		public function QuoteToDB()
		{	
			if(/*!preg_match('/[^A-Za-z0-9?!.,öäüÖÄÜÖéè]/', $this->m_Quote) && !preg_match('/[^A-Za-z0-9öäüÖÄÜéè]/', $this->m_Author) && !preg_match('/[^0-9]/', $this->m_Quoteyear)*/1==1) // REGEX b^.^d
			{
			  	$s = sql::AddQuote($this->m_Quote, $this->m_Author, $this->m_Quoteyear);
			  	if ($s == true){return true;}
			  	return "Beim bearbeiten der Anfrage sind Fehler aufgetreten! Bitte versuchen Sie es erneut.";
			}
			return "Bitte nur alphanumerische Zeichen (a-z, A-Z, 0-9) eingeben!";
		}

		public function getData()
		{
			return $this->m_Quote." - ".$this->m_Author." - ".$this->m_Quoteyear;
		}

	}

?>