<?php

	include_once("../logger/connectDB.php");
	include_once("../logger/logger.php");

	class user {
		
		private $loggedIn;
		private $logger;
		private $dataBaseConnection;

		/**
		 * @param dataBaseConnection - Referenz zu einer bereits erstellten Datenbankverbindung
		 */

		function __construct($dataBaseConnection){

			$this->dataBaseConnection = $dataBaseConnection;
			$this->loggedIn = false;
			$this->logger = new logger("user.php", $dataBaseConnection);
			$this->logger->log("user.php","SYSTEM");

			}
		
		/**
		 * @param username	username fürs einloggen
		 * @param password	password fürs einloggen
		 * @return boolean
		 */
		
		function logIn($username, $password) {

			$this->logger->log("User try log in:".$username, "SYSTEM");
			$query = "SELECT COUNT(*) FROM touser WHERE BINARY username = '$username' && BINARY password = '$password'";
			$checkBenutzerdaten = $this->dataBaseConnection->query($query);
			$this->loggedIn = $checkBenutzerdaten->fetchColumn() > 0;

			return $this->loggedIn;
			
		}

		/**
		 * @param regUsername 	username fürs registrieren
		 * @param regPassword 	password fürs registrieren
		 * @param regEmail		email fürs registrieren
		 */

		function registrate($regUsername, $regPassword, $regEmail){

			$query = "INSERT INTO touser (username, password, email) VALUES ('$regUsername', '$regPassword', '$regEmail')";
			$checkUsername = "SELECT COUNT(*) FROM touser WHERE BINARY username = '$regUsername'";
			$checkEmail = "SELECT COUNT(*) FROM touser WHERE BINARY email = '$regEmail'";


			$checkExistingUsername = $this->dataBaseConnection->query($checkUsername);
			$checkExistingEmail = $this->dataBaseConnection->query($checkEmail);

			//Erst prüfen, ob username und email schon vergeben ist
			$queryOutputExistingUsername = $checkExistingUsername->fetchColumn() > 0;
			$queryOutputExistingEmail = $checkExistingEmail->fetchColumn() > 0;

			if(($queryOutputExistingUsername > 0) or ($queryOutputExistingEmail > 0)) {

					$registrationSuccess = false; //1 oder mehrmals die selbe email oder username vorhanden

			} else {

					$this->dataBaseConnection->query($query);
					$this->logger->log("neuer Benutzer:".$regUsername, "SYSTEM");
					$registrationSuccess = true;
			}

			return $registrationSuccess;

		}
	}


?>