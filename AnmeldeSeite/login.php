<?php session_start();

//includes
include_once("../logger/connectDB.php");
include_once("../logger/logger.php");
include_once("user.php");

//username und passwort von input abfangen
$username = $_POST['ghs_t_username'];
$password = $_POST['ghs_t_password'];

$dataBaseConnection = new DataBaseConnection();
$logger = new logger("login.php", $dataBaseConnection);
$user = new user($dataBaseConnection);

$logger->log("login.php", "SYSTEM");

//security against Brute Force
if ($_SESSION['ghs_t_countlogintries'] >= 10) {

    if (!isset($_SESSION['ghs_t_timeout'])) { //set timeout for 60 sec.

        $_SESSION['ghs_t_timeout'] = time();
        $_SESSION['ghs_t_settimeout'] = 60;

    }
    
    if ((time() - $_SESSION['ghs_t_timeout']) > $_SESSION['ghs_t_settimeout']) { //if timeout is passed set counter to 0 and delete timeout

        $_SESSION['ghs_t_countlogintries'] = 0;
        unset($_SESSION['ghs_t_timeout']);
        $logger->log("counter+timeout resetted", "SYSTEM");

    } else {

        $logger->log("loginlocked:".(time() - $_SESSION['ghs_t_timeout']), "SYSTEM");

        header("Location: http://localhost/Toms/AnmeldeSeite/loginLocked.php"); //nur weiterleiten falls timeout nicht abgelaufen ist. Sonst scipt weiter ausführen
    
    }

}

if ($_SESSION['ghs_t_countlogintries'] < 10) {

    $logInSuccess = $user->logIn($username, $password);

    if($logInSuccess) {
        $logger->log("New User Logged In", $username);
        $_SESSION['ghs_t_loggedIn'] = true;
        $_SESSION['ghs_t_username'] = $username;

        if($_POST['stayloggedIn']) {
            
            $logger->log("setlogincookie", "SYSTEM");
            $usernameHash = hash('md5', $username);

            //SECURITY gegen Suchen von zufälligen hashs
            $updateTimerDB = "SELECT ID FROM touser WHERE username LIKE '$username'";

            $userID = $dataBaseConnection->query($updateTimerDB);
            $fetchUserID = $userID->fetch();
            $key = $fetchUserId[0] . $usernameHash;
            
            $insertKey = "UPDATE touser SET rememberLogin = '$usernameHash' WHERE username LIKE '$username'";
            $dataBaseConnection->query($insertKey);

            setcookie('ghs_t_user', $username, time() + (86400 * 30), "/");
            setcookie('ghs_t_password', $key, time() + (86400 * 30), "/");
        }
    } else { //SECURITY against Brute Force

        if (!isset($_SESSION['ghs_t_countlogintries'])) {
            $_SESSION['ghs_t_countlogintries'] = 0;
        }

        $_SESSION['ghs_t_countlogintries'] += 1;
        $logger->log("countlogintries=".$_SESSION['ghs_t_countlogintries'], "SYSTEM");

    }

    header("Location: http://localhost/Toms/index.php");

}
?>