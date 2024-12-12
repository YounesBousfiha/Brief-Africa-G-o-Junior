<?php
    include "../config/database.php";
    include "./auth.php";

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $Nom = htmlspecialchars($_POST['nom']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $passwordConfirm = htmlspecialchars($_POST['confirmation']);

        $status = emailEnumeration($conn, $email);
        if(!$status && $password === $passwordConfirm) {
            SignUp($conn, $Nom, $email, $password); 
        } else {
            echo "Failed";
        }
    }
?>