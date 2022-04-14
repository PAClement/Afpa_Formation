<?php

require_once '../view/ViewUser.php';
require_once '../view/ViewTemplate.php';

require_once '../model/ModelUser.php';

if (isset($_SESSION['user_id'])) {

    $conn = new ModelUser();
    $info = $conn->getUserInfo($_SESSION['user_id']);
}

?>

<html lang="fr">

<head>
    <?php

    ViewTemplate::head("Espace membre");

    ?>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php


    ViewTemplate::header();
    if (isset($_SESSION['user_id'])) {

        ViewUser::membreInfo($info);
    } else {
        ViewTemplate::response("danger", "Impossible d'accèder à se contenu", "connexion.php");
    }

    ViewTemplate::footer();

    ?>
</body>

</html>