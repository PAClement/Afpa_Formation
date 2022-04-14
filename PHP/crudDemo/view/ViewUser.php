<?php

class ViewUser
{
    public static function formConnexion()
    {
?>
        <div class="container my-5 col-6">
            <h1 class="mb-3">Connexion</h1>
            <form action=<?= htmlspecialchars($_SERVER["PHP_SELF"])  ?> method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" name="connexion" class="btn btn-primary">Se connecter</button>
            </form>
        </div>
    <?php
    }

    public static function formInscription($mail = null, $password = null, $nom = null, $prenom = null, $address = null, $tel = null)
    {
    ?>
        <div class="container">
            <div class="row my-5">
                <div class="col-6">
                    <h1 class="mb-3">Inscription</h1>
                    <form action=<?= htmlspecialchars($_SERVER["PHP_SELF"])  ?> method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" value="<?= $mail ?>" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" value="<?= $password ?>" name="password" class="form-control" id="exampleInputPassword1" required>
                        </div>
                        <div class="form-group row">
                            <div class="col-6">
                                <label for="exampleInputEmail1">Nom</label>
                                <input type="text" value="<?= $nom ?>" name="nom" class="form-control" required>
                            </div>
                            <div class="col-6">
                                <label for="exampleInputEmail1">Prenom</label>
                                <input type="text" value="<?= $prenom ?>" name="prenom" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" value="<?= $address ?>" name="address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tel</label>
                            <input type="tel" value="<?= $tel ?>" name="tel" class="form-control" required>
                        </div>
                        <button type="submit" name="inscription" class="btn btn-primary">S'inscrire</button>
                    </form>
                </div>
                <div class="col-6">
                    <div class="d-flex flex-column align-items-center">

                        <h2>Condition to respect</h2>
                        <ul class="mt-5 list-group list-group-flush">
                            <li class="list-group-item"><strong>Email : </strong>Your email must be conform like <i>clementpaquentin@hotmail.fr</i></li>
                            <li class="list-group-item"><strong>Password :</strong> Must be at leat 8 characters , 1 special characters and lower / upper case characters good luck. </li>
                            <li class="list-group-item"><strong>Name & Last Name : </strong> Don't use number on your name or lastname.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }

    public static function membreInfo($info = null)
    {

    ?>
        <div class="container my-5 pb-5">

            <h2 class="my-5">Bonjour <?= $info['nom'] . ' ' . $info['prenom'] ?></h2>

            <h4>Voici vos informations</h4>
            <ul class="list-group">
                <li class="list-group-item"><strong>Votre mail : </strong><?= $info['mail'] ?></li>
                <li class="list-group-item"><strong>Votre address : </strong><?= $info['address'] ?></li>
                <li class="list-group-item"><strong>Votre tel : </strong><?= $info['tel'] ?></li>
                <li class="list-group-item"><strong>Date d'inscription : </strong><?= $info['date_inscription'] ?></li>
            </ul>
        </div>
<?php
    }
}
