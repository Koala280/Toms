<?php                       /******************PROFIL/SETTING SEITE**********************/
session_start();

//includes
include_once("../logger/connectDB.php");
include_once("../logger/logger.php");

//logger
$dataBaseConnection = new DataBaseConnection();
$logger = new logger("settings/index.php", $dataBaseConnection);
$logger->log("settings", $_SESSION['ghs_t_username']);

if(isset($_POST['submsubmitSelectedInterestit'])){ /*TODO*/
    $selectedInterest = $_POST['selInterest'];
    if ($selectedInterest == "Sport") {

    } elseif ($selectedInterest == "Musik") {
        
    } elseif ($selectedInterest == "Gaming") {
        
    } elseif ($selectedInterest == "Feiern") {
        
    } elseif ($selectedInterest == "Essen") {
        
    }
}

?>

<!DOCTYPE html>
<html>

    <head><?php include_once("../includes/head.inc.php"); ?></head>
    
    <body>

        <header><?php include_once("../includes/header.inc.php"); ?></header>

        <main><?php include_once("includes/main.inc.php");?></main>
        
    </body>
    <footer><?php include_once("../includes/footer.inc.php"); ?></footer>
</html>