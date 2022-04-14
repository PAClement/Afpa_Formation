<?php

require_once '../model/ModelAdmin.php';

class ViewAdmin
{
    public static function listUser()
    {
        $conn = new ModelAdmin();
        $tab = $conn->getAllUser();

        if (count($tab) > 0) {
?>

            <div class="container my-5">

                <h1 class="my-3">Liste des utilisateurs</h1>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Password</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($tab as $value) {
                        ?>
                            <tr class="<?= $value['role'] === "admin" ? "bg-danger text-light" : "" ?>">
                                <th scope="row"><?= $value['id'] ?></th>
                                <td><?= $value['mail'] ?></td>
                                <td><?= $value['password'] ?></td>
                                <td><?= $value['role'] ?></td>
                                <td>
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="<?= "#modal_" . $value['id'] ?>">
                                        Information
                                    </button>
                                </td>
                            </tr>
                            <div class="modal fade" id="modal_<?= $value['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content <?= $value['role'] === "admin" ? "border border-danger" : "" ?> ">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="<?= $value['id'] . 'label' ?>"><?= $value['role'] . ' : #' . $value['id'] ?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><strong>Prenom : </strong><?= $value['nom'] ?></li>
                                                <li class="list-group-item"><strong>Prenom : </strong><?= $value['prenom'] ?></li>
                                                <li class="list-group-item"><strong>Address : </strong><?= $value['address'] ?></li>
                                                <li class="list-group-item"><strong>Tel : </strong><?= $value['tel'] ?></li>
                                                <li class="list-group-item"><strong>Membre depuis : </strong><?= $value['date_inscription'] ?></li>
                                            </ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
    <?php
    }
}
/* <td>
    <a class="btn btn-info" href="modif.php?id=<?= $value['id'] ?>">
        <span class="text-white icon">
            <i class='bx bx-edit-alt py-1'></i>
        </span>
    </a>
    <a class="btn btn-danger" onClick="javascript: return confirm('Êtes-vous sur de vouloir supprimer : <?= $contact['nom'] . ' ' . $contact['prenom'] ?> ?');" href="supp.php?id=<?= $contact['id'] ?>">
        <span class="text-white icon">
            <i class='bx bx-trash py-1'></i>
        </span>
    </a>
</td>
 */
