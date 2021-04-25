<?php session_start();

//includes
include_once("../logger/connectDB.php");
include_once("../logger/logger.php");

//logger
$dataBaseConnection = new DataBaseConnection();
$logger = new logger("login.php", $dataBaseConnection);
$logger->log("loginPage.php", "SYSTEM");
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

        <div id="idLogin">
            <?php
                echo $_SESSION['username'].'<br>';

                if($_SESSION['ghs_t_loggedIn']) {
                    echo "Login erfolgreich";
                } else {
                    echo "Benutzername oder Passwort falsch";
                }
            ?>
        </div>
        
        <div id="idLoginBackToIndex">
                <a href="index.php"><button>zurück</button></a>
        </div>

        <?php include("../includes/footer.inc.php"); ?>

    </body>
</html>