<?php session_start();

//includes
    include_once("../logger/connectDB.php");
    include_once("../logger/logger.php");

//logger
    $dataBaseConnection = new DataBaseConnection();
    $logger = new logger("AnmeldeSeite/index.php", $dataBaseConnection);
	$logger->log("INDEXANMELDESEITE", "SYSTEM");

?>

<!DOCTYPE html>
<html>

	<head> <?php include("../includes/head.inc.php"); ?> </head>


	<body id="idAnmeldeSeiteBody">
		
	<header> <?php include("../includes/header.inc.php"); ?> </header>

	<main> <?php include("../AnmeldeSeite/includes/main.inc.php"); ?> </main>

	</body>

	
	<footer> <?php include("../includes/footer.inc.php"); ?> </footer>

</html>