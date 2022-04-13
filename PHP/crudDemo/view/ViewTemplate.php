<?php


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
    ?>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
            <a class="navbar-brand">Hey im a navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="liste.php">Liste Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ajoutContact.php">Ajouter Contact</a>
                    </li>
                    <li>
                        <a class="nav-link" href="upload.php">Upload</a>
                    </li>
                </ul>
            </div>
        </nav>
    <?php
    }

    public static function footer()
    {
    ?>


        <footer class="text-muted bg-dark text-white py-5">
            <div class="container text-white">
                <h1>Im a footer</h1>
                <br>
                <h2>copyright</h2>
            </div>
        </footer>

    <?php
    }

    public static function response($state, $contain, $link)
    {
    ?>
        <div class="container my-5">
            <div class="alert alert-<?= $state ?>" role="alert">
                <?= $contain ?>
            </div>
            <div class="spinner-border" role="status">
                <span class="sr-only">Loading ...</span>
            </div>
            Redirection en cours ...
        </div>
        <script>
            setInterval(() => {
                window.location.replace("<?= $link ?>");
            }, 2000);
        </script>
<?php
    }
}
