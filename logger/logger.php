<?php
	
	include_once("connectDB.php");

    class logger {

        private $sitename;
		private $dataBaseConnection;


		/** 
		 * @param sitename - SeitenID
		 * @param dataBaseConnection - Referenz zu einer bereits erstellten Datenbankverbindung auf der selben Seite
		 */

        function __construct($sitename, $dataBaseConnection){

			$this->dataBaseConnection = $dataBaseConnection;
			$this->sitename = $sitename;

		}

		/**
		 * @param msg - Log-Nachricht
		 * @param user - Username
		 * @param getUserID - ID von username in Tabelle touser 
		 */

		function log($msg, $user) {

			$getUserID = "SELECT ID FROM touser WHERE username LIKE '$user'";

        	$userID = $this->dataBaseConnection->query($getUserID);
       		$fetchUserID = $userID->fetch();
			
			$uid = 0;

			if ($fetchUserID[0] > 0) {
				$uid = $fetchUserID[0];
			}

			$insert = "INSERT INTO tologger (userID, sitename, message) VALUES ('$uid', '$this->sitename', '$msg')";

       	 	$this->dataBaseConnection->query($insert);

        }
	}
?>