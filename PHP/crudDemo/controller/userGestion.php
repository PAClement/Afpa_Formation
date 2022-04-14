<html lang="fr">

<head>
    <?php
    require_once '../view/ViewTemplate.php';
    require_once '../view/ViewAdmin.php';


    ViewTemplate::head("User Gestion");
    ?>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php

    ViewTemplate::header();

    if (isset($_SESSION['user_id'])) {

        ViewAdmin::listUser();
    } else {
        ViewTemplate::response("danger", "Impossible d'accèder à ce contenu", "connexion.php");
    }

    ViewTemplate::footer();

    ?>
</body>

</html>