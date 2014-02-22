<?php

	class api
	{
		private $m_ApiType;
		private $m_ApiCode;

		private $m_Quote;
		private $m_Author;
		private $m_Quoteyear;


		public function __construct($request)
		{
			$this->m_ApiType = !empty($request["type"]) ? $request["type"] : null;
			$this->m_ApiCode = !empty($request["code"]) ? $request["code"] : null;

			$this->m_Quote = !empty($request["quote"]) ? $request['quote'] : null;
			$this->m_Author = !empty($request["author"]) ? $request['author'] : null;
			$this->m_Quoteyear = !empty($request["quoteyear"]) ? $request["quoteyear"] : null;
		}

		public function run()
		{
			switch($this->m_ApiType)
			{
				case 'getQuotes':
					switch ($this->m_ApiCode) 
					{
						case 'all':
							$r = sql::getAllQuotes();
							echo $r;
							break;
						
						default:
							return "Request code unknown";
							break;
					}
					break;

				case 'setQuotes':
					if($this->m_Quote != null && $this->m_Author != null && $this->m_Quoteyear != null)
					{
						$quote = new quote($this->m_Quote, $this->m_Author, $this->m_Quoteyear);
						$quote->QuoteToDB();
					}
					break;

				default:
					return "Request type unknown";
					break;
	
			}
		}
	}

?>