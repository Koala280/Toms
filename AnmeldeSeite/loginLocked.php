<?php session_start();

//includes
include_once("../logger/connectDB.php");
include_once("../logger/logger.php");

//logger
$dataBaseConnection = new DataBaseConnection();
$logger = new logger("AnmeldeSeite/loginLocked.php", $dataBaseConnection);
$logger->log("loginLocked.php", "SYSTEM");

?>

<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css">
    </head>

    <body>

    <?php include("../includes/header.inc.php"); ?>
        
        <h1>Login</h1>

        <div><P>Du hast zu viele Anmeldeversuche gebraucht. Bitte warte eine Weile bis du wieder entsperrt bist.</P></div>
        
        <div id="idLoginBackToIndex">
                <a href="../index.php"><button>zurück</button></a>
        </div>

        <?php include("../includes/footer.inc.php"); ?>

    </body>
</html>