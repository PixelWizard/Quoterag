<?php

	class router
	{
		//Membervariabeln
		private $m_Request;
		private $m_RequestType;
		private $m_Api;


		//Konstruktoren
		public function __construct($request)
		{
			$this->m_Request = $request;
			$this->m_Api = !empty($request["api"]) ? $request["api"] : "false";
		}

		//Methoden
		private function checkRequestType()
		{
			if($this->m_Api == "true")
			{
				$this->m_RequestType = "api";
			}
			else
			{
				$this->m_RequestType = "user";
			}
		}

		public function run()
		{
			$this->checkRequestType();

			if($this->m_RequestType == "api")
			{
				$api = new api($this->m_Request);
				return $api->run();
			}
			else
			{
				$userreq = new userreq();
				return $userreq->display();
			}

		}

	}

?>