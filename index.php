<?php session_start();		/****************HOMEPAGE*****************/

// includes
	include_once("logger/connectDB.php");
	include_once("logger/logger.php");
// logger
	$dataBaseConnection = new DataBaseConnection();
	$logger = new logger("index.php", $dataBaseConnection);
	$logger->log("INDEX", "SYSTEM");
?>

<!DOCTYPE html>
<html>

	<head> <?php include("includes/head.inc.php"); ?> </head>

	<body>
		
	<header> <?php include("includes/header.inc.php"); ?> </header>
	
	<main>
		<div id="idMain">
			<?php
			if (isset($_SESSION['ghs_t_loggedIn']) &&  $_SESSION['ghs_t_loggedIn']) {
				include("includes/indexULI.inc.php"); //nur für angemeldete User ("wichtiger" content) (CSS zu leicht zu manipulieren)
			}
			else {
				include("includes/indexUNLI.inc.php"); //für nicht angemeldete User vorschlag sich anzumelden
			}
			?>
		</div>
	</main>

	</body>


	<footer> <?php include("includes/footer.inc.php"); ?> </footer>

</html>