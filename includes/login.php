<?php
    include "../config/database.php";
    include "./auth.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        
        $userData = Login($conn, $email, $password);

        if($userData) {
            header("Location: http://localhost:3000/public/index.php");
        } else {
            header("Location: http://localhost:3000/public/index.php");
        }
    }
?>