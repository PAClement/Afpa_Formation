<html lang="fr">

<head>
    <?php

    require_once '../view/ViewContact.php';
    require_once '../view/ViewTemplate.php';

    require_once '../model/ModelContact.php';

    ViewTemplate::head("Suppression contact");

    ?>
</head>

<body>
    <?php

    ViewTemplate::header();

    if (isset($_GET["id"])) {
        $contact = new ModelContact();
        if ($contact->oneContact(htmlspecialchars($_GET["id"]))) {
            if ($contact->deleteContact(htmlspecialchars($_GET["id"]))) {

                ViewTemplate::response("success", "Le contact à bien été supprimé", "liste.php");
            } else {

                ViewTemplate::response("danger", "Le contact n'a pas pu être supprimé", "liste.php");
            }
        } else {
            ViewTemplate::response("danger", "Aucun contact ne correspond", "liste.php");
        }
        die();
    } else {
        ViewTemplate::response("warning", "Vous n'avez rien à faire là", "liste.php");
    }

    ViewTemplate::footer();

    ?>
</body>

</html>