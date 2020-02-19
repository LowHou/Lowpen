<?php

	class User
	{
		private $name;
		private $surname;
		private $dni;
		private $email;
		private $country;

		/*
		function __construct($name, $surname, $dni, $email){
			$this->name = $name;
			$this->surname = $surname;
			$this->dni = $dni;
			$this->email = $email;
		}
		*/
		
		function __construct(){}
		
		public function ShowMeJSON(){
			
			/*Pasalo como objeto JSON*/

			foreach ($this as $key => $value) {
				$JSON_info["{$key}"] = $value;
			}
			return json_encode($JSON_info);
		}

		/* Getters */
		public function GetName(){
			return $this->name;
		}

		public function GetSurname(){
			return $this->surname;
		}

		public function GetDni(){
			return $this->dni;
		}

		public function GetEmail(){
			return $this->email;
		}

		public function GetCountry(){
			return $this->country;
		}

		/* Setters */
		public function SetName($name){
			$this->name = $name;
		}

		public function SetSurname($surname){
			$this->surname = $surname;
		}

		public function SetDni($dni){
			$this->dni = $dni;
		}

		public function SetEmail($email){
			$this->email = $email;
		}

		public function SetCountry($country){
			$this->country = $country;
		}
	}

?>