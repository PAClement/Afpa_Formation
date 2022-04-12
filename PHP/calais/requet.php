<?php

function connexion()
{
    $servername = "localhost"; // nom du serveur
    $username = "root"; // nom d'utilisateur de mysql
    $password = ""; // mot de passe mysql
    $dbname = "villes"; // nom de la base
    $port = "3308"; //port

    try {
        $idcon = new PDO("mysql:host=$servername;port=$port;dbname=$dbname;charset=utf8", $username, $password);
        return $idcon;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return FALSE;
        exit();
    }
}

function listeVilles()
{
    $idcon = connexion();
    $requete = $idcon->prepare("
      SELECT * FROM ville ;
    ");
    $requete->execute();
    return $requete->fetchAll(PDO::FETCH_ASSOC);
}


function afficherVilles()
{
    $liste = listeVilles();
?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Code postal</th>
                    <th scope="col">Population</th>
                    <th scope="col">Superficie</th>
                    <th scope="col">Densité</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($liste as $colonne => $valeur) {
                ?> <tr>
                        <th scope="row"><?= $valeur['id'] ?> </th>
                        <td><?= $valeur['nom'] ?></td>
                        <td><?= $valeur['cod_post'] ?></td>
                        <td><?= $valeur['population'] ?></td>
                        <td><?= $valeur['superficie'] ?></td>
                        <td><?= $valeur['densite'] ?></td>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

<?php

}

afficherVilles();
