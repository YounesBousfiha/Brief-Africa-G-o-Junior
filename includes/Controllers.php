<?php
    include "../config/database.php";

    // Update cette function later pour uploader les image
    function addNewPay($conn, $nom, $description, $population, $langue, $imageURL, $tmp_name, $Continent_id, $created_by) {
        $sql = 'INSERT INTO Pays (Nom, Population, Langue, Description, ImageURL, Continent_ID, Created_BY) Values(?, ?, ?, ?, ?, ?, ?)';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sisssii', $nom, $population, $langue, $description, $imageURL, $Continent_id, $created_by);
        $stmt->execute();

        if(move_uploaded_file($tmp_name, $imageURL)) {
            echo "Uploaded";
        } else {
            echo "Failed";
        }
    }

    function updatePay($conn, $pay_id, $newNom, $newDescri, $newPopulation, $newImage, $tmp_name, $newlangue) {
        $sql = 'UPDATE Pays SET Nom = ?, Description = ?, Population = ?, ImageUrl = ?, Langue = ? WHERE ID = ?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssissi', $newNom, $newDescri, $newPopulation, $newImage, $newlangue, $pay_id);
        $stmt->execute();

        if(move_uploaded_file($tmp_name, $newImage)) {
            echo "Uploaded";
        } else {
            echo "Failed";
        }
    } 

    function removePay($conn, $pays_id) {
        $sql = 'DELETE FROM Pays WHERE id = ?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $pays_id);
        $stmt->execute();
    }

    // Update cette function later pour uploader les image
    function addNewVille($conn, $pays_id, $nom, $description, $imageURL, $tmp_name, $type, $created_by) {
        $sql = 'INSERT INTO Villes (Pays_ID, Nom, Description, ImageURL, Type, Created_BY) VALUES (?, ?, ?, ?, ?, ?)';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('issssi', $pays_id, $nom, $description, $imageURL, $type, $created_by);
        $stmt->execute();

        if(move_uploaded_file($tmp_name, $imageURL)) {
            echo "Uploaded";
        } else {
            echo "failed to Upload";
        }
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

    function AjoutePaysValidation($nom, $description, $population, $langue, $imageUrl) {
        $allowType = ['png', 'jpg'];
        $fileType = strtolower(pathinfo($imageUrl, PATHINFO_EXTENSION));
        var_dump($fileType);
        $Erros =[];
        if(empty($nom)) {
            $Erros['nomError'] = "Empty Field Name";
        } elseif (empty($description)) {
            $Erros['DescError'] = "empty field Description";
        } elseif (empty($population)) {
            $Erros['populError'] = 'empty field Population';
        } elseif(empty($langue)) {
            $Erros['langueError'] = 'empty field langue';
        } elseif(empty($imageURL) && !in_array($fileType, $allowType) ) {
            $Erros['ImageError'] = 'empty field Image or Wrong Image Extension';
        }

        return $Erros;
    }

    function AjouteVilleValidaiton($nom, $description, $type) {
        $Erros = [];

        if(empty($nom)) {
            $Erros['nomError'] = "Empty Field Name";
        } elseif(empty($description)) {
            $Erros['DescError'] = "empty field Description";
        } elseif(empty($type)) {
            $Erros['typeError'] = 'empty field type';
        }

        return $Erros;
    }

    function ImagePath($image_name) {
        $dir =  "./upload/" . $image_name;
        return $dir;
    }

    function searchBylangue($conn, $langue) {
        $sql = 'SELECT * FROM Pays WHERE Langue = ?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $langue);
        $stmt->execute();
        $res = $stmt->get_result();
        return $res;
    }
    function searchByPopulation($conn, $population) {
        $sql = 'SELECT * FROM Pays WHERE Population > ?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $population);
        $stmt->execute();
        $res = $stmt->get_result();
        return $res;
    }
?>