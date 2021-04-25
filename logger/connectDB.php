<?php

    /* Datenbank Verbindungsdaten */
	const DATABASEHOST = '127.0.0.1';
	const DATABASENAME = 'my_ghs_website';

	/* Datenbank Zugangsdaten */
	const USERNAMEDB = 'root';
	const PASSWORDDB = 'MUdB2Xw1w2Ha7HIc';

    //Database Verbindungs Klasse
    class DataBaseConnection {

        private $pdo; //Datenbankverbindung
        
        function __construct() {

            $dsn = 'mysql:host='.DATABASEHOST.';dbname='.DATABASENAME; //Zugangs+Verbindungsdaten

            //Verbindung herstellen oder Fehlermeldung ausgeben
            try {
                $this->pdo = new PDO($dsn, USERNAMEDB, PASSWORDDB);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            
        }

        /**
		 * Kapselt Zugriffe auf die private member Instance pdo.
		 * @param query - MYSQL QUERY
		 * @err - Fehler Ausgabe bei MYSQL Fehler
		 * @return Ergebnis der MySql-Query(-Abfrage)
		 */

        function query($query)
		{
			try {
                    $queryResult = $this->pdo->query($query);
                    return $queryResult;
			    } catch (PDOException $e) {	// falls Fehler vorkommen Ausgabe Fehler Informationen
				    echo $e->getMessage();
			    }
		}
    };
?>