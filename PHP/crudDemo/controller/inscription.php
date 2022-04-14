<html lang="fr">

<head>
    <?php

    require_once '../view/ViewUser.php';
    require_once '../view/ViewTemplate.php';

    require_once '../model/ModelUser.php';
    date_default_timezone_set('Europe/Paris');

    ViewTemplate::head("Inscription");

    $sign = new ModelUser();


    function formCheck(array $data): bool
    {
        $isOk = true;

        foreach ($data as $key => $value) {
            $value = htmlspecialchars($value);

            switch ($key) {
                case 'mail':
                    $value = filter_var($value, FILTER_SANITIZE_EMAIL);
                    if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                        $isOk = false;
                    }
                    break;
                case 'password':
                    if (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,})$/", $value) == 1) {
                        $isOk = false;
                    }
                    break;
                case 'tel':
                    if (!preg_match("/^(?:(?:\+|00)33[\s.-]{0,3}(?:\(0\)[\s.-]{0,3})?|0)[1-9](?:(?:[\s.-]?\d{2}){4}|\d{2}(?:[\s.-]?\d{3}){2})$/", $value) == 1) {
                        $isOk = false;
                    }
                    break;
            }
        }

        return $isOk;
    }
    ?>
</head>

<body>
    <?php


    ViewTemplate::header();


    if (isset($_POST["inscription"])) {
        if (!$sign->getUser($_POST['mail'])) {
            if (formCheck($_POST)) {

                foreach ($_POST as $key => $data) {
                    $_POST[$key] = htmlspecialchars($_POST[$key]);
                }
                do {
                    $token = mt_rand();
                } while ($token == $sign->tokenVerif($token));

                array_push($_POST, $_POST['token'] = $token);
                array_push($_POST, $_POST['date_inscription'] = date("Y-m-d"));
                $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

                if ($sign->signUp($_POST)) {
                    $tab = $sign->getUser($_POST['mail']);
                    $_SESSION['user_id'] = $tab['id'];
                    ViewTemplate::response("success", "Vous êtes inscrit !", "membre.php");
                } else {
                    ViewTemplate::response("danger", "Une erreur est survenue !");
                    ViewUser::formInscription($_POST['mail'], $_POST['password'], $_POST['nom'], $_POST['prenom'], $_POST['address'], $_POST['tel']);
                }
            } else {
                ViewTemplate::response("danger", "Il y'a un problème dans le formulaire !");
                ViewUser::formInscription($_POST['mail'], $_POST['password'], $_POST['nom'], $_POST['prenom'], $_POST['address'], $_POST['tel']);
            }
        } else {
            ViewTemplate::response("warning", "Compte déjà existant !");
            ViewUser::formInscription($_POST['mail'], $_POST['password'], $_POST['nom'], $_POST['prenom'], $_POST['address'], $_POST['tel']);
        }
    } else {
        ViewUser::formInscription();
    }


    ViewTemplate::footer();

    ?>
</body>

</html>