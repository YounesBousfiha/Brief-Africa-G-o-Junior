<?php

    function renderPays($data) {
        return "
        <div class='col order-md-first'>
            <div class='card'><img class='card-img w-100 d-block' src='https://cdn.bootstrapstudio.io/placeholders/1400x800.png'>
                 <div class='card-img-overlay text-center d-flex flex-column justify-content-center align-items-center p-4'>
                    <h4>{$data['Nom']}</h4>
                    <p>{$data['Description']}</p>
                    <a href='../pages/country.php?id={$data['ID']}'>See More</a>
                    <form action='../pages/allCountries.php' method='POST'  class='d-flex'>
                        <input type='hidden' name='pays_id' value='{$data['ID']}'>
                        <button type='submit' name='action' value='delete'>Delete</button>
                        <button type='submit' name='action' value='modify'>Modifie</button>
                    </form>
            </div>
        </div>
        </div>";
    }

    function renderCity($city) {
        return "
        <div class='col order-md-first'>
        <div class='card'><img class='card-img w-100 d-block' src='https://cdn.bootstrapstudio.io/placeholders/1400x800.png'>
            <div class='card-img-overlay text-center d-flex flex-column justify-content-center align-items-center p-4'>
                <h4>{$city['Nom']}</h4>
                <p>{$city['Description']}</p>
                <a href='../pages/city.php?id={$city['ID']}'>see More</a>
                <form action='../pages/country.php?id={$_GET['id']}' method='POST'  class='d-flex'>
                        <input type='hidden' name='ville_id' value='{$city['ID']}'>
                        <button type='submit' name='action' value='delete'>Delete</button>
                        <button type='submit' name='action' value='modify'>Modifie</button>
                </form>
            </div>
        </div>
    </div>";
    
    }

    function renderFiltredCity($city) {
        return "
        <div class='col-md-4'>
        <div class='card'><img class='card-img w-100 d-block' src='https://cdn.bootstrapstudio.io/placeholders/1400x800.png'>
            <div class='card-img-overlay text-center d-flex flex-column justify-content-center align-items-center p-4'>
                <h4>{$city['Nom']}</h4>
                <p>{$city['Description']}</p>
            </div>
        </div>
    </div>";
    }
?>