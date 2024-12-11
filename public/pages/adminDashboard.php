<?php 
    include '../../config/database.php';
    include '../../includes/Controllers.php';
    include '../../includes/helpers.php';

    $data = getAllPays($conn);


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = htmlspecialchars($_POST['country_id']);
        $action = $_POST['action'];

        if($action == 'delete') {
            removePay($conn, $id);
            header("Refresh:0");
        } elseif ($action == 'modify') {
            //modifie Function
        } else {
            $nom = htmlspecialchars($_POST['nom']);
            $description = htmlspecialchars($_POST['description']);
            $population = htmlspecialchars($_POST['population']);
            $langue = htmlspecialchars($_POST['langue']);
            $imageURL = "https://fakeimage.com/hello.png";
            $Continent_id = 1;
            $created_by = 1;
    
            addNewPay($conn, $nom, $description, $population, $langue, $imageURL, $Continent_id, $created_by);
            header("Refresh:0");
        }
    }
    //formValidation($nom, $description, $population, $langue);
    //var_dump($_POST);
?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>AdminDashBoard</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="../assets/css/Ludens---1-Index-Table-with-Search--Sort-Filters-v20.css">
</head>

<body>
</div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6">
                <h3 class="text-dark mb-4">Countries</h3>
            </div>
            <div class="col-12 col-sm-6 col-md-6 text-end" style="margin-bottom: 30px;"><a class="btn btn-primary" role="button"><i class="fa fa-plus"></i>&nbsp;Add New Country</a></div>
        </div>
        <div class="card" id="TableSorterCard">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-striped table tablesorter" id="ipi-table">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-center">Nom</th>
                                    <th class="text-center">Description</th>
                                    <th class="text-center">Population</th>
                                    <th class="text-center">Langue</th>
                                    <th class="text-center filter-false sorter-false">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
                                    foreach($data as $country) {
                                        echo renderAdminPays($country);
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="../assets/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20-Ludens---1-Index-Table-with-Search--Sort-Filters.js"></script>
    <script src="../assets/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20-Ludens---Material-UI-Actions.js"></script>
</body>

</html>