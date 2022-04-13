<?php


class ViewTemplate
{

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
                </ul>
            </div>
        </nav>
    <?php
    }

    public static function footer()
    {
    ?>


        <footer class="text-muted bg-dark text-white py-5">
            <div class="container">
                <p class="float-right">
                    <a href="#">Back to top</a>
                </p>
                <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
                <p>New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="/docs/4.6/getting-started/introduction/">getting started guide</a>.</p>
            </div>
        </footer>

    <?php
    }

    public static function response($state, $contain)
    {
    ?>
        <div class="container my-5">
            <div class="alert alert-<?= $state ?>" role="alert">
                <?= $contain ?>
            </div>
        </div>
<?php
    }
}
