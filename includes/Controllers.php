<?php
    include "../config/database.php";

    function addNewPay($conn, $nom, $population, $langue) {

        // Pass the Argument to our function
        // verifie the Argumenet
        // Craft the Query 
        // Execute the query@YounesBousfiha revient de verfier cette aprés l'implementation d'une mechanisme pour generée URL pour les Images


        // return a status
    }

    function updatePay($conn) {} // TODO: add argements with annotations
    function removePay($conn) {} // TODO: add argements with annotations

    function addNewVille($conn) {} // TODO: add argements with annotations
    function updateVille($conn) {} // TODO: add argements with annotations
    function removeVille($conn) {} // TODO: add argements with annotations


    // queries for administrator & Students
    function getAllPays($conn) {
        $sql = 'SELECT * FROM Pays';
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $data;
    }


    function getAllvilles($conn, $id) {
        $sql = 'SELECT * FROM Villes WHERE Pays_id = ?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        return $data;
    }

    function getSingleVille($conn, $id) {
        $sql = 'SELECT * FROM Villes WHERE ID = ?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        return $data;
    }

    function getSinglePay($conn, $id) {
        $sql = 'SELECT * FROM Pays WHERE ID = ?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        return $data;
    }

    function eliminateCity($city, $allcities) {
        $cities = [];
       foreach($allcities as $elem) {
        if($elem['Nom'] != $city[0]['Nom'] ) {
            array_push($cities, $elem);
        }
       }
       return $cities;
    }


?>