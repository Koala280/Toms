<?php session_start();

    //includes
    include_once("../logger/connectDB.php");
    include_once("../logger/logger.php");
    include_once("user.php");

    //get username Email password von Input
    $regUsername = $_POST['regUsername'];
    $regPassword = $_POST['regPassword'];
    $regEmail = $_POST['regEmail'];

    //logger
    $dataBaseConnection = new dataBaseConnection();
    $logger = new logger("registrate.php", $dataBaseConnection);
    $logger->log("registrate.php", "SYSTEM");

    //proof if Email is correct. If yes -> registrate
    if (filter_var($regEmail, FILTER_VALIDATE_EMAIL)) {

        $user = new user($dataBaseConnection);
        $registrationSuccess = $user->registrate($regUsername, $regPassword, $regEmail);
        header("Location: http://localhost/Toms/AnmeldeSeite/registrationPage.php?registrationSuccess=".$registrationSuccess."&regUsername=".$regUsername);

    } else {

        header("Location: http://localhost/Toms/AnmeldeSeite/registrationPage.php?wrongEmail=true");

    }
?>