<?php

    function renderPays($data) {
        return "
        <div class='col order-md-first'>
            <div class='card'><img class='card-img w-100 d-block' src='{$data['ImageURL']}'>
                 <div class='card-img-overlay text-center d-flex flex-column justify-content-center align-items-center p-4'>
                    <h4>{$data['Nom']}</h4>
                    <p>{$data['Description']}</p>
                    <a href='../pages/country.php?id={$data['ID']}'>See More</a>
            </div>
        </div>
        </div>";
    }

    function renderCity($city) {
        return "
        <div class='col order-md-first'>
        <div class='card'><img class='card-img w-100 d-block' src='{$city['ImageURL']}'>
            <div class='card-img-overlay text-center d-flex flex-column justify-content-center align-items-center p-4'>
                <h4>{$city['Nom']}</h4>
                <p>{$city['Description']}</p>
                <a href='../pages/city.php?id={$city['ID']}'>see More</a>
            </div>
        </div>
    </div>";
    
    }

    function renderFiltredCity($city) {
        return "
        <div class='col-md-4'>
        <div class='card'><img class='card-img w-100 d-block' src='{$city['ImageURL']}'>
            <div class='card-img-overlay text-center d-flex flex-column justify-content-center align-items-center p-4'>
                <h4>{$city['Nom']}</h4>
                <p>{$city['Description']}</p>
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