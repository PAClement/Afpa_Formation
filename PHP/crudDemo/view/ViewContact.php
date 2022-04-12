<?php

require_once '../model/ModelContact.php';

class ViewContact
{

    public static function listeContacts()
    {
        $contact = new ModelContact();
        $liste = $contact->listeContacts();
        if (count($liste) > 0) {
?>
            <div class="container my-5">

                <h1 class="my-3">Liste contact</h1>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Mail</th>
                            <th scope="col">Tel</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($liste as $contact) {
                        ?>
                            <tr>
                                <th scope="row"><?= $contact['id'] ?></th>
                                <td><?= $contact['nom'] ?></td>
                                <td><?= $contact['prenom'] ?></td>
                                <td><?= $contact['mail'] ?></td>
                                <td><?= $contact['tel'] ?></td>
                                <td>
                                    <a href="modif.php?id=<?= $contact['id'] ?>"><button type="button" class="btn btn-info">Modifier</button></a>
                                    <a href="supp.php?id=<?= $contact['id'] ?>"><button type="button" class="btn btn-danger">Supprimer</button></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        <?php
        } else {
        ?>
            <div class="alert alert-danger" role="alert">
                Aucun contact n'existe dans la liste.
            </div>
        <?php
        }
    }

    public static function addContact()
    {
        ?>
        <div class="container my-5">

            <h1 class="my-3">Formulaire d'ajout</h1>
            <form method="POST" action="ajoutContact.php">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" class="form-control" id="nom">
                </div>
                <div class="form-group">
                    <label for="prenom">Prenom</label>
                    <input type="text" name="prenom" class="form-control" id="prenom">
                </div>
                <div class="form-group">
                    <label for="mail">Email</label>
                    <input type="email" name="mail" class="form-control" id="mail" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="tel">tel</label>
                    <input type="tel" name="tel" class="form-control" id="tel">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <?php
    }

    public static function ajoutContact()
    {
        $newContact = new ModelContact();

        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $mail = htmlspecialchars($_POST['mail']);
        $tel = htmlspecialchars($_POST['tel']);

        if ($newContact->ajoutContact($nom, $prenom, $mail, $tel)) {
        ?>
            <div class="container my-5">

                <div class="alert alert-success" role="alert">
                    Le contact est ajouté !
                </div>
            </div>
        <?php
        } else {
        ?>
            <div class="container my-5">

                <div class="alert alert-danger" role="alert">
                    Le contact n'a pas pu être ajouté !
                </div>
            </div>
        <?php
        }
    }

    public static function modifContact($id)
    {
        $contact = new ModelContact();
        $him = $contact->oneContact($id);
        ?>

        <div class="container">

            <h1 class="my-3">Formulaire de modification</h1>
            <div class="row">
                <div class="col-8">
                    <form action="addModification.php" method="POST">

                        <input type="text" name="id" class="d-none" id="id" value=<?= $him['id'] ?>>
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" class="form-control" id="nom" value=<?= $him['nom'] ?>>
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prenom</label>
                            <input type="text" name="prenom" class="form-control" id="prenom" value=<?= $him['prenom'] ?>>
                        </div>
                        <div class="form-group">
                            <label for="mail">Email</label>
                            <input type="email" name="mail" class="form-control" id="mail" aria-describedby="emailHelp" value=<?= $him['mail'] ?>>
                        </div>
                        <div class="form-group">
                            <label for="tel">tel</label>
                            <input type="tel" name="tel" class="form-control" id="tel" value=<?= $him['tel'] ?>>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-4">
                    <div class="container">
                        <h1 class="my-3">User #<?= $him["id"] ?></h1>
                        <ul class="list-group list-group-flush mb-5">
                            <li class="list-group-item">id : <?= $him["id"] ?></li>
                            <li class="list-group-item">nom : <?= $him["nom"] ?></li>
                            <li class="list-group-item">prenom : <?= $him["prenom"] ?></li>
                            <li class="list-group-item">mail : <?= $him["mail"] ?></li>
                            <li class="list-group-item">tel : <?= $him["tel"] ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

    public static function addModification()
    {
        $contact = new ModelContact();

        $id = htmlspecialchars($_POST['id']);
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $mail = htmlspecialchars($_POST['mail']);
        $tel = htmlspecialchars($_POST['tel']);

        if ($contact->modifContact($id, $nom, $prenom, $mail, $tel)) {
        ?>
            <div class="container my-5">

                <div class="alert alert-success" role="alert">
                    La modification est faite !
                </div>
            </div>
        <?php
        } else {
        ?>
            <div class="container my-5">

                <div class="alert alert-danger" role="alert">
                    Alert modification pas possible !
                </div>
            </div>
        <?php
        }
    }

    public static function deleteContact($id)
    {
        $contact = new ModelContact();
        if ($contact->deleteContact($id)) {

        ?>
            <div class="container my-5">

                <div class="alert alert-success" role="alert">
                    La suppresion est faite !
                </div>
            </div>
        <?php
        } else {
        ?>
            <div class="container my-5">

                <div class="alert alert-danger" role="alert">
                    Alert suppression pas possible !
                </div>
            </div>
<?php
        }
    }
}
