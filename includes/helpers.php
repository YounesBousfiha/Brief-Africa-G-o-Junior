<?php

    function renderPays($data) {
        $population = number_format($data['Population']);
        return "
        <div class='card' style='width: 18rem;'>
            <img class='card-img-top' src='{$data['ImageURL']}' alt='Card image cap' width='262' height='262'>
            <div class='card-body'>
                <h5 class='card-title'>{$data['Nom']}</h5>
                <p class='card-text'>{$data['Description']}</p>
                <div class='d-flex justify-content-around'>
                    <div>
                        <span>{$population}<span>
                    </div>
                    <div>
                        <p>{$data['Langue']}<p>
                    </div>
                </div>
                <a href='./country.php?id={$data['ID']}' class='btn btn-primary'>Go somewhere</a>
            </div>
        </div>
        ";
    }

    function renderCity($city) {
        return "
            <div class='card' style='width: 18rem;'>
            <img class='card-img-top' src='{$city['ImageURL']}' alt='Card image cap' width='262' height='262'>
            <div class='card-body'>
                <h5 class='card-title'>{$city['Nom']}</h5>
                <p class='card-text'>{$city['Description']}</p>
                <div class='d-flex justify-content-around'>
                </div>
                <a href='./city.php?id={$city['ID']}' class='btn btn-primary'>Go somewhere</a>
            </div>
        </div>
        ";
    
    }

    function renderFiltredCity($city) {
        return "
        <div class='col-md-4'>
        <div class='card'><img class='card-img w-100 d-block' src='{$city['ImageURL']}' height='300' >
            <div class='card-img-overlay text-center d-flex flex-column justify-content-center align-items-center p-4'>
                <h4>{$city['Nom']}</h4>
                <p>{$city['Description']}</p>
                <span><a href='./city.php?id={$city['ID']}'>See More</a></span>
            </div>
        </div>
    </div>";
    }

    function renderAdminBtnCountry() {
        return '
        <div class="d-flex justify-content-center sticky-top bg-white" style="height: 60px;">
            <button type="button" class="btn btn-primary left-50 fs-3"  data-bs-toggle="modal" data-bs-target="#ajouteModal">Add New Ville</button>
            <button type="button" class="btn btn-primary left-50 fs-3"  data-bs-toggle="modal" data-bs-target="#ModifieModal">Operations</button>
        </div>';
    }

    function renderAdminBtnCity() {
        return '
        <div class="d-flex justify-content-center sticky-top bg-white" style="height: 60px;">
            <button type="button" class="btn btn-primary left-50 fs-3"  data-bs-toggle="modal" data-bs-target="#ModifieModal">Operations</button>
        </div>
        ';  
    }

    function renderAdminBtnall() {
        return '
    <div class="d-flex justify-content-center sticky-top bg-white" style="height: 60px;">
        <button type="button" class="btn btn-primary left-50 fs-3"  data-bs-toggle="modal" data-bs-target="#ajouteModal">Add New Pay</button>
    </div>
        ';
    }
?>
