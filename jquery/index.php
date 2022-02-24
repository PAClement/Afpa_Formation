<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JQuery cours</title>

    <link rel="stylesheet" href="assets/css/main.css">
    <style>
        .para-style {
            color: skyblue;
            border: 1px solid skyblue;
        }

        .para-style-clique {
            color: gray;
            border: 1px solid gray;
        }

        .bg-bc {
            background: skyblue;
            color: white;
            border: 1px solid skyblue;
        }
    </style>
</head>

<body id="print">
    <p class="para1">texte du para 1</p>

    <ul>
        <li>
            <span>span de li 1 - petit fils de ul</span>
        </li>
        <li>li 2</li>
        <li>li 3</li>
        <li>li 3</li>
    </ul>
    <div class="dom">
        <h3>Titre 3</h3>
        <p class="para-dom">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt aliquid rerum voluptas voluptatem, dicta accusantium assumenda
            quidem molestiae eius consectetur architecto cum iste, ipsam dolorem ipsum laudantium omnis itaque hic.
        </p>
        <label for="capitale">Quelle est la capitale de la France ?</label>
        <input type="text" id="capitale" name="capitale" placeholder="capitale" />
        <div class="reponse"></div>
        <div class="resultat"></div>

        <span></span>
        <input type="submit" value="Valider" />
    </div>

    <p class="extensible">para extensible</p>
    <p class="supprimer">Lorem ipsum dolor quidem? Aut.</p>

    <a class="lien-supp" href="https://www.google.com/">lien vers google</a>

    <div class="div-data" data-role="user" data-info='{"nom":"HIDRI", "prenom":"Ryan"}'>div des infos</div>

    <button>Toggle class</button>
    <button class="test-btn">bouton de test</button>

    <a class="no-link" href="https://www.google.com/"> lien - pas de redirection</a> <br />
    <a class="trigger-link" href="https://www.google.com/"> redirection artifielle</a>

    <p class="para-style">para non cliquÃ©</p>
    <button class="btn-style">style du paragraphe</button> <br />

    <button class="bc-btn">bc-btn</button>
    <button class="masquer-info-btn">masquer info</button>
    <button class="afficher-info-btn">afficher info</button>
    <button class="trigger-btn">trigger bouton</button>

    <form action="test.php" method="get">
        <input type="text" name="nom" id="nom" />
        <input type="text" name="prenom" id="prenom" />
    </form>

    <button class="maj-form-btn">maj champ form</button>
    <ul>
        <li>
            <span>span petit fils</span>
        </li>
    </ul>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>