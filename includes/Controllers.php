<?php
    require "./config.php";

    function addNewPay($conn, $nom, $population, $langue) {

        // Pass the Argument to our function
        // verifie the Argumenet
        // Craft the Query 
        // Execute the query
        // return a status
    }

    function updatePay($conn) {} // TODO: add argements with annotations
    function removePay($conn) {} // TODO: add argements with annotations

    function addNewVille($conn) {} // TODO: add argements with annotations
    function updateVille($conn) {} // TODO: add argements with annotations
    function removeVille($conn) {} // TODO: add argements with annotations


    // queries for administrator & Students
    function getAllPays(mysqli $conn): array {
        $sql = 'SELECT * FROM Pays';
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $data;
    }


    function getAllvilles(mysqli $conn) {
        /*$sql = 'SELECT * FROM Villes WHERE '; // need to take Payd_ID
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $data;*/
    }

    function getSingleVille($conn) {} // TODO: add argements with annotations
    function getSinglePay($conn) {} // TODO: add argements with annotations


?>