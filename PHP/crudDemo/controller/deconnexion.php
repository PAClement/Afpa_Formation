<?php
// On démarre la session
session_start();

// On détruit les variables de notre session
session_unset();

// On détruit notre session
session_destroy();

require_once '../view/ViewTemplate.php';


ViewTemplate::head("Deconnexion");

ViewTemplate::response("danger", "Deconnexion reussi ! A bientôt !", "connexion.php");
