<?php require "../includes/header.php"; ?>
<?php 
// Include Header & Footer

phpinfo();


// This Page here will Contain A box Has 2 choice either Admin or user

/*
    Application Logic:

    2 routes , one for administrators & other for Student

    Administratetur route will contain a navbar(Demo) & footer (Demo)
    add new pay Form
        -> the new pay card , will contain, add new city  Affichage , modifie , delete features,
        -> the new added city will contain modifie & delete & expand city
    
    Student:
        -> see all Country's
        -> see all Citites 
        -> Take a Quiz
 */


 /*
    add new Country function:
    -> a html form has action set to POST
    -> we will use the GOlabl variables SERVER , REQUEST & also isset function
    -> then we will Craft our Query after we sanitize the Input
    -> Our queri will be a Inseert to To pays
 */
?>

<?php require "../includes/footer.php"; ?>