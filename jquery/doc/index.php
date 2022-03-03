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
            color: red;
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

        .para-rouge {
            font-size: 15px;
        }

        .style-each {
            background: black;
            color: green;
            font-size: 1.5rem;
        }

        .red-bg {
            background-color: red;
        }

        .new-style {
            background-color: black;
            color: green;
            font-size: 2rem;
        }

        .change-style-css {
            background-color: orange;
            color: white;
            font-size: 1.5rem;
        }
    </style>
</head>

<body id="print">
    <!-- <p class="para1">texte du para 1</p>

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

    -->
    <div class="div-data" data-role="user" data-info='{"nom":"HIDRI", "prenom":"Ryan"}'>div des infos</div>
    <!--

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

    
    <button class="maj-form-btn">maj champ form</button>
    <ul>
        <li>
            <span>span petit fils</span>
        </li>
    </ul>

    <div class="div-eleve" data-role="eleve" data-info='{"note1":"15","note2":"19"}'>div des infos</div>

    <button class="para-click">CLICK ME</button>

    <p class="para-style">
        para-non-clique
    </p> -->
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, adipisci?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, adipisci?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, adipisci?</p>

    <form action="test.php" method="get">
        <input type="text" name="nom" id="nom" />
        <input type="text" name="prenom" id="prenom" />
        <button type="submit">send !</button>
    </form>

    <div class="liens-each">
        <a href="#">lien 1</a>
        <a href="#">lien 2</a>
        <a href="#">lien 3</a>
        <a href="#">lien 4</a>
        <a href="#">lien 5</a>
    </div>

    <ul class="each">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>

    <button class="each-clique">CLICKE ME</button>
    <button class="maj-form-btn">MAJ FORM BUTTON</button>

    <button class="masquer-info-btn">masquer info</button>
    <button class="afficher-info-btn">afficher info</button>

    <button class="New">NEW BUTTON</button>
    <button class="trigger-btn">btn link</button>

    <button class="trigger-para">trigger para</button>
    <button class="change-style-btn">nv parabtn</button>

    <a class="no-link trigger-link" target="_BLANK" href="https://github.com/">je suis le lien</a>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>