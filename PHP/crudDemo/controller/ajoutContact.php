<html lang="fr">

<head>
    <?php

    require_once '../view/ViewContact.php';
    require_once '../view/ViewTemplate.php';
    require_once '../model/ModelContact.php';

    ViewTemplate::head("Ajouter contact");

    ?>
</head>

<body>
    <?php

    ViewTemplate::header();

    if (isset($_POST["ajout"])) {
        $newContact = new ModelContact();
        if ($newContact->ajoutContact(htmlspecialchars($_POST["nom"]), htmlspecialchars($_POST["prenom"]), htmlspecialchars($_POST["mail"]), htmlspecialchars($_POST["tel"]))) {

            ViewTemplate::response("success", "Le contact à bien été ajouté", "liste.php");
        } else {

            ViewTemplate::response("danger", "Le contact n'a pas pu être ajouté", "ajoutContact.php");
        }
    } else {

        ViewContact::addContact();
    }

    ViewTemplate::footer();

    ?>
</body>

</html>