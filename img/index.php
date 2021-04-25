<?php session_start();

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
		<div class="cHomepagePicture"></div>

		<?php
		if (isset($_SESSION['ghs_t_loggedIn']) &&  $_SESSION['ghs_t_loggedIn']) {
			include("includes/indexULI.inc.php"); //nur für angemeldete User
		}
		else {
			include("includes/indexUNLI.inc.php"); //nur für nicht angemeldete User (CSS zu leicht zu manipulieren)
		}
		?>
			
	</main>

	</body>


	<footer> <?php include("includes/footer.inc.php"); ?> </footer>

</html>