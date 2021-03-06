<?php

session_start();

require_once '../model/ModelUser.php';

class ViewTemplate
{

    public static function head($title)
    {
?>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

        <style>
            .icon {
                font-size: 1.2em;
            }
        </style>
    <?php
    }

    public static function header()
    {

        if (isset($_SESSION['user_id'])) {

            $viewConn = new ModelUser();
            $tab = $viewConn->getUserById($_SESSION['user_id']);
        }
    ?>
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark border-bottom shadow-sm">
            <h5 class="my-0 mr-md-auto font-weight-normal text-white">clement's Industry</h5>
            <?php if (isset($_SESSION['user_id'])) { ?>
                <nav class="my-2 my-md-0 mr-md-3 ">
                    <?php if ($tab['role_id'] == 1) { ?>
                        <a class="btn btn-warning mx-3" href="userGestion.php">User gestion</a>
                    <?php } ?>
                </nav>
                <a class="btn btn-outline-primary mx-3" href="membre.php">Espace membre</a>
                <a class="btn btn-danger" href="deconnexion.php">Se deconnecter</a>
            <?php } else { ?>
                <a class="btn btn-outline-primary" href="connexion.php">Sign in</a>
                <a class="btn btn-primary mx-3" href="inscription.php">Sign up</a>
            <?php } ?>
        </div>
    <?php
    }

    public static function footer()
    {
    ?>


        <footer class="text-muted bg-dark text-white py-5 mt-auto">
            <div class="container text-white">
                <h1>Im a footer</h1>
                <br>
                <h2>copyright</h2>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <?php
    }

    public static function response($state, $contain, $link = null)
    {
    ?>
        <div class="container my-5">
            <div class="alert alert-<?= $state ?>" role="alert">
                <?= $contain ?>
            </div>
            <?php
            if ($link !== null) {
            ?>
                <div class="spinner-border" role="status">
                    <span class="sr-only">Loading ...</span>
                </div>
                Redirection en cours ...
            <?php
            }
            ?>
        </div>
        <script>
            <?php if ($link !== null) { ?>
                setInterval(() => {
                    window.location.replace("<?= $link ?>");
                }, 2000);
            <?php } ?>
        </script>
<?php
    }
}
