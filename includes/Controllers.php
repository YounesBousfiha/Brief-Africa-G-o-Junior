<?php
    include "../config/database.php";

    // Update cette function later pour uploader les image
    function addNewPay($conn, $nom, $description, $population, $langue, $imageURL, $Continent_id, $created_by) {
        $sql = 'INSERT INTO Pays (Nom, Population, Langue, Description, ImageURL, Continent_ID, Created_BY) Values(?, ?, ?, ?, ?, ?, ?)';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sisssii', $nom, $population, $langue, $description, $imageURL, $Continent_id, $created_by);
        $stmt->execute();
    }

    function updatePay($conn, $pay_id, $newNom, $newDescri, $newPopulation, $newImage, $newlangue) {
        $sql = 'UPDATE Pays SET Nom = ?, Description = ?, Population = ?, ImageUrl = ?, Langue = ? WHERE ID = ?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssissi', $newNom, $newDescri, $newPopulation, $newImage, $newlangue, $pay_id);
        $stmt->execute();
    } 

    function removePay($conn, $pays_id) {
        $sql = 'DELETE FROM Pays WHERE id = ?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $pays_id);
        $stmt->execute();
    }

    // Update cette function later pour uploader les image
    function addNewVille($conn, $pays_id, $nom, $description, $imageURL, $type, $created_by) {
        $sql = 'INSERT INTO Villes (Pays_ID, Nom, Description, ImageURL, Type, Created_BY) VALUES (?, ?, ?, ?, ?, ?)';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('issssi', $pays_id, $nom, $description, $imageURL, $type, $created_by);
        $stmt->execute();
    }

    function updateVille($conn, $city_id, $newNom, $newDescri, $newImage, $newType) {
        $sql = 'UPDATE Villes SET Nom = ?, Description = ?, ImageURL = ?, Type = ? WHERE ID = ?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssssi', $newNom, $newDescri, $newImage, $newType, $city_id);
        $stmt->execute();

    }

    function removeVille($conn, $vile_id) {
        $sql = 'DELETE FROM Villes WHERE ID = ?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $vile_id);
        $stmt->execute();
    }


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

    function formValidation($nom, $description, $population, $langue) {
        if(empty($nom)) {

        } elseif (empty($description)) {

        } elseif (empty($population)) {

        } elseif(empty($langue)) {

        }
    }


?>