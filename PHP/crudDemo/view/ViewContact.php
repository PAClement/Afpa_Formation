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
                            <th scope="row"><?php echo $contact['id'] ?></th>
                            <td><?php echo $contact['nom'] ?></td>
                            <td><?php echo $contact['prenom'] ?></td>
                            <td><?php echo $contact['mail'] ?></td>
                            <td><?php echo $contact['tel'] ?></td>
                            <td>
                                <a href="modif.php?id=<?php echo $contact['id'] ?>"><button type="button" class="btn btn-info">Modifier</button></a>
                                <a href="supp.php?id=<?php echo $contact['id'] ?>"><button type="button" class="btn btn-danger">Supprimer</button></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        <?php
        } else {
        ?>
            <div class="alert alert-danger" role="alert">
                Aucun contact n'existe dans la liste.
            </div>
<?php
        }
    }
}
