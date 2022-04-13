<html lang="fr">

<head>
    <?php

    require_once '../view/ViewContact.php';
    require_once '../view/ViewTemplate.php';

    ViewTemplate::head("liste contact");

    ?>

</head>

<body>
    <?php

    ViewTemplate::header();
    ViewContact::listeContacts();
    ViewTemplate::footer();

    ?>
</body>

</html>