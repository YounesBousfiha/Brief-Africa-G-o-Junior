<?php
    include "../config/database.php";
    include "./auth.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $userData = Login($conn, $email, $password);

        if($userData) {
            session_start();
            setcookie("type", $userData['ID'], time() + 3600, "/");
            //header("Location: ../public/pages/allCountries.php");
        } else {
            echo "Failed!";
        }
    }
?>