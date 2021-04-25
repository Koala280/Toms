<?php      /*************Dies ist der Head Bereich, indem auch anmeldung abgefragt wird***************/
//error_reporting(0);
//Cookie abfrage         
if (isset($_COOKIE['ghs_t_user'])) {

    //Logger
    //TODO FIX? $path = $_SERVER['DOCUMENT_ROOT'];
    $path = ".";
    $includeDB = $path . "/logger/connectDB.php";
    $includeLogger = $path . "/logger/connectDB.php";

    include_once($includeDB);
    include_once($includeLogger);
    $dataBaseConnection = new DataBaseConnection();
    $logger = new logger("head.inc.php", $dataBaseConnection);
    $logger->log("COOKIECHECK", "SYSTEM");


    $deleteCookie = "UPDATE touser SET timer = '', rememberLogin = '' WHERE timer < '".(time() + 86400 * 30)."'";
    $dataBaseConnection->query($deleteCookie);

    $checkQuery = "SELECT COUNT(*) FROM touser WHERE BINARY username = '".$_COOKIE['ghs_t_user']."'";
    $checkUsername = $dataBaseConnection->query($checkQuery);
    $usernameChecked = $checkUsername->fetchColumn() > 0;

    if ($usernameChecked) { //Sicherheitsmaßnahme, damit Passwort nicht abgeschickt wird bevor sicher ist, dass username stimmt

        $checkPasswordHash = "SELECT COUNT(*) FROM touser WHERE BINARY rememberLogin = '".$_COOKIE['ghs_t_password']."'";
        $checkResult = $dataBaseConnection->query($checkPasswordHash);
        $passwordChecked = $checkResult->fetchColumn() > 0;

        if ($passwordChecked) {
            $_SESSION['ghs_t_loggedIn'] = true;
            $_SESSION['ghs_t_username'] = $_COOKIE['ghs_t_user'];
        }

    }


}

?>

<meta charset="UTF-8">
<meta property="og:title"		content="Testwebsite" />
<meta property="og:type" 		content="test" />
<meta property="og:url"   		content="http://localhost/Toms/" />
<meta property="og:image" 		content="http://localhost/Toms/img/logo" />
<meta property="og:site_name"	content="Toms's Testwebsite" />
<meta property="og:description"	content="Hier ist nichts wichtiges drauf" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="http://localhost/Toms/css/style.css" media="all, screen">
<script language="javascript" type="text/javascript" src="http://localhost/Toms/js/script.js"></script>
<title>Tomsens Website</title>