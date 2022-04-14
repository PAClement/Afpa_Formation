<html lang="fr">

<head>
    <?php

    require_once '../view/ViewUser.php';
    require_once '../view/ViewTemplate.php';

    require_once '../model/ModelUser.php';

    ViewTemplate::head("Connexion");

    ?>
</head>

<body>
    <?php


    ViewTemplate::header();

    if (isset($_POST['connexion'])) {
        $res = new ModelUser();
        $info = $res->getUser(htmlspecialchars($_POST['mail']));
        if ($info) {
            if (password_verify(htmlspecialchars($_POST['password']), $info['password'])) {

                $_SESSION['user_id'] = $info['id'];
                ViewTemplate::response("success", "Connexion reussi !", "membre.php");
            } else {
                ViewTemplate::response("warning", "Email ou password invalide");
            }
        } else {
            ViewTemplate::response("warning", "Email ou password invalide");
        }
    }

    ViewUser::formConnexion();

    ViewTemplate::footer();

    ?>
</body>

</html>