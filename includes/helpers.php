<?php

    function renderPays($data) {
        return "
        <div class='col order-md-first'>
            <div class='card'><img class='card-img w-100 d-block' src='https://cdn.bootstrapstudio.io/placeholders/1400x800.png'>
                 <div class='card-img-overlay text-center d-flex flex-column justify-content-center align-items-center p-4'>
                    <h4>{$data['Nom']}</h4>
                    <p>{$data['Description']}</p>
                    <a href='../pages/country.php?id={$data['ID']}'>See More</a>
            </div>
        </div>
        </div>";
    }

    function renderAdminPays($country) {
        return "
        <tr>
            <td>{$country['Nom']}</td>
            <td>{$country['Description']}</td>
            <td>Test</td>
            <td>English</td>
            <td class='text-center align-middle' style='max-height: 60px;height: 60px;'>

                <a class='btn btnMaterial btn-flat primary semicircle' role='button' href='../pages/country.php?id={$country['ID']}'>
                    <i class='far fa-eye'></i>
                </a>

                <form action='#' method='post' style='display: inline;'>
                    <input type='hidden' name='country_id' value='{$country['ID']}'>
                    <button type='submit' class='btn btnMaterial btn-flat success semicircle' role='button' data-bs-toggle='modal' data-bs-target='#ModifieModal'>
                        <i class='fas fa-pen'></i>
                    </button>
                </form>
                <form action='#' method='post' style='display: inline;'>
                    <input type='hidden' name='country_id' value='{$country['ID']}'>
                    <button type='submit' class='btn btnMaterial btn-flat accent btnNoBorders checkboxHover' style='margin-left: 5px;' name='action' value='delete'>
                        <i class='fas fa-trash btnNoBorders' style='color: #DC3545;'></i>
                    </button>
                </form>

            </td>
        </tr>";
    }

    function renderCity($city) {
        return "
        <div class='col order-md-first'>
        <div class='card'><img class='card-img w-100 d-block' src='https://cdn.bootstrapstudio.io/placeholders/1400x800.png'>
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
        <div class='card'><img class='card-img w-100 d-block' src='https://cdn.bootstrapstudio.io/placeholders/1400x800.png'>
            <div class='card-img-overlay text-center d-flex flex-column justify-content-center align-items-center p-4'>
                <h4>{$city['Nom']}</h4>
                <p>{$city['Description']}</p>
            </div>
        </div>
    </div>";
    }
?>