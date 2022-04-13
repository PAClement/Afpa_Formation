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
                                    <a href="modif.php?id=<?= $contact['id'] ?>">
                                        <button type="button" class="btn btn-info">
                                            <span class="text-white icon">
                                                <i class='bx bx-edit-alt py-1'></i>
                                            </span>
                                        </button>
                                    </a>
                                    <a href="supp.php?id=<?= $contact['id'] ?>">
                                        <button type="button" class="btn btn-danger">
                                            <span class="text-white icon">
                                                <i class='bx bx-trash py-1'></i>
                                            </span>
                                        </button>
                                    </a>
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
            <form method="POST" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" class="form-control" id="nom" required>
                </div>
                <div class="form-group">
                    <label for="prenom">Prenom</label>
                    <input type="text" name="prenom" class="form-control" id="prenom" required>
                </div>
                <div class="form-group">
                    <label for="mail">Email</label>
                    <input type="email" name="mail" class="form-control" id="mail" aria-describedby="emailHelp" required>
                </div>
                <div class="form-group">
                    <label for="tel">tel</label>
                    <input type="tel" name="tel" class="form-control" id="tel">
                </div>
                <button type="submit" name="ajout" class="btn btn-primary">Submit</button>
            </form>
        </div>
    <?php
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
                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">

                        <input type="text" name="id" class="d-none" id="id" value=<?= $him['id'] ?>>
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" class="form-control" id="nom" value='<?= $him['nom'] ?>' required>
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prenom</label>
                            <input type="text" name="prenom" class="form-control" id="prenom" value='<?= $him['prenom'] ?>' required>
                        </div>
                        <div class="form-group">
                            <label for="mail">Email</label>
                            <input type="email" name="mail" class="form-control" id="mail" aria-describedby="emailHelp" value='<?= $him['mail'] ?>' required>
                        </div>
                        <div class="form-group">
                            <label for="tel">tel</label>
                            <input type="tel" name="tel" class="form-control" id="tel" value='<?= $him['tel'] ?>' required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="modif">Submit</button>
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
}
