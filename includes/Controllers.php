<?php
    include "../config/database.php";

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

    function getSingleVille($conn) {}
    function getSinglePay($conn) {}


?>