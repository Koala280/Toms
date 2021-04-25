<?php session_start();

    //includes
    include_once("../logger/connectDB.php");
    include_once("../logger/logger.php");

    //logger
    $dataBaseConnection = new dataBaseConnection();
    $logger = new logger("registrationPage.php", $dataBaseConnection);
    $logger->log("registrationPage.php", "SYSTEM");

?>

<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css">
    </head>

    <body>

    <?php include("../includes/header.inc.php"); ?>
        
        <h1>Registrieren</h1>

        <div id="idRegistrate">
            <?php

                if(isset($_GET['registrationSuccess']) && $_GET['registrationSuccess']) { //If username and email are not used/the registration was successfull?>
                
                <p>Herzlich willkommen auf meiner Website<?echo " ".$_GET['regUsername'];?></p>
                <h2>Bitte verifiziere deinen Account</h2>
                <p>Wir haben dir eine Bestätigungsemail geschickt. Mit dem Link in der Email kannst du deine Email Adresse verifizieren.</p>

                
                <?php } elseif (isset($_GET['wrongEmail']) && $_GET['wrongEmail']) { //if email wasnt typed correctly

                    echo "Bitte gebe eine korrekte Email ein. Du brauchst diese um deinen Account zu aktivieren."; 

                } elseif ($_GET['registrationSuccess'] === "") { //if username or email is used/registration was not successfull

                    echo "Der Username oder die Email ist leider schon vergeben, wähle bitte einen anderen.";
                
                } else {

                    echo "Ein Fehler ist aufgetreten. Bitte wende dich an den Entwickler";
                
                }

            ?>
        </div>
        
        <div id="idLoginBackToIndex">
                <a href="index.php"><button>zurück</button></a>
        </div>

    </body>
</html>