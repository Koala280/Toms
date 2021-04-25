<?php                  /***********USER ABMELDEN*******************/
session_start();

    //includes
    include_once("../logger/connectDB.php");
    include_once("../logger/logger.php");

    //logger
    $dataBaseConnection = new DataBaseConnection();
    $logger = new logger("abmelden/index.php", $dataBaseConnection);
    $logger->log("INDEXABMELDEN", $_SESSION['ghs_t_username']);

    //sessions zerstören
    session_unset();
    session_destroy();
    
    //cookies löschen
    unset($_COOKIE['ghs_t_user']);
    unset($_COOKIE['ghs_t_password']);

    setcookie('ghs_t_user', null, -1, "/");
    setcookie('ghs_t_password', null, -1, "/");

    //serverseitige absicherung löschen
    $deleteCookie = "UPDATE touser SET rememberLogin = ''";
	$dataBaseConnection->query($deleteCookie);

    //zurück zur Homepage
    header("Location: http://localhost/Toms/index.php");

?>