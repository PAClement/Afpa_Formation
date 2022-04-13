<html lang="fr">

<head>

    <?php

    require_once '../view/ViewContact.php';
    require_once '../view/ViewTemplate.php';
    require_once '../model/ModelContact.php';

    ViewTemplate::head("Modification contact");

    ?>
</head>

<body>
    <?php

    ViewTemplate::header();

    if (isset($_GET['id'])) {
        $modifContact = new ModelContact();
        if ($modifContact->oneContact($_GET['id'])) {
            if (isset($_POST['modif'])) {
                if ($modifContact->modifContact(htmlspecialchars($_POST['id']), htmlspecialchars($_POST["nom"]), htmlspecialchars($_POST["prenom"]), htmlspecialchars($_POST["mail"]), htmlspecialchars($_POST["tel"]))) {

                    ViewTemplate::response("success", "Le contact à bien été modifié", "liste.php");
                } else {

                    ViewTemplate::response("danger", "Le contact n'a pas pu être modifié", "modif.php?id=" . htmlspecialchars($_POST["id"]));
                }
            } else {
                ViewContact::modifContact($_GET["id"]);
            }
        } else {
            ViewTemplate::response("danger", "Aucun contact ne correspond", "liste.php");
        }
    } else {
        ViewTemplate::response("warning", "Vous n'avez rien à faire là", "liste.php");
    }


    ViewTemplate::footer();

    ?>
</body>

</html>