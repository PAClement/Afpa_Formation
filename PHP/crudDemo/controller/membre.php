<?php

require_once '../view/ViewUser.php';
require_once '../view/ViewTemplate.php';

require_once '../model/ModelUser.php';

if (isset($_SESSION['user_id'])) {

    $conn = new ModelUser();
    $info = $conn->getUserInfo($_SESSION['user_id']);
} else {
    header('Location: liste.php');
}

?>

<html lang="fr">

<head>
    <?php

    ViewTemplate::head("Espace membre");

    ?>
</head>

<body>
    <?php


    ViewTemplate::header();

    ViewUser::membreInfo($info);

    ViewTemplate::footer();

    ?>
</body>

</html>