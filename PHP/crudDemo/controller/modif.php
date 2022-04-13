<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste contact</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <?php
    require_once '../view/ViewContact.php';
    require_once '../view/ViewTemplate.php';
    require_once '../model/ModelContact.php';

    ViewTemplate::header();

    if (isset($_POST['modif'])) {
        $modifContact = new ModelContact();
        if ($modifContact->modifContact(htmlspecialchars($_POST['id']), htmlspecialchars($_POST["nom"]), htmlspecialchars($_POST["prenom"]), htmlspecialchars($_POST["mail"]), htmlspecialchars($_POST["tel"]))) {

            ViewTemplate::response("success", "Le contact à bien été modifié");
        } else {

            ViewTemplate::response("danger", "Le contact n'a pas pu être modifié");
        }
    } else {
        ViewContact::modifContact($_GET["id"]);
    }

    ViewTemplate::footer();

    ?>
</body>

</html>