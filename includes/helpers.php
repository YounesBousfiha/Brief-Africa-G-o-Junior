<?php
    function renderPays($data) {
        return "
        <div class='col order-md-first'>
            <div class='card'><img class='card-img w-100 d-block' src='https://cdn.bootstrapstudio.io/placeholders/1400x800.png'>
                 <div class='card-img-overlay text-center d-flex flex-column justify-content-center align-items-center p-4'>
                    <h4>{$data['Nom']}</h4>
                    <p>{$data['Description']}</p>
                    <a href='/allCities.php?id={$data['ID']}'>See More</a>
            </div>
        </div>
        </div>";
    }
?>