// console.log($("masquer-info-btn"));
// console.log($(document));

//--------------------

// Syntaxe : 
$(document).ready(/*cb*/)

$(document).ready(function () {
    // console.log("le doc est chargé");
    // console.log($(".para-dom"));
    // console.log($(".lien-supp"));
});


//----------------------------

$(document).ready(function () {
    $('.para1').text("cours jquery").css('color', 'skyblue').fadeIn('slow');
});

// la methode css() : ajoute du style en ligne à un element

// $(selecteur).css("prop", "veleur");


$("p").css("background-color", "skyblue");
$("a").css("color", "green");

//Pour plusieurs prop css = {"propriete":"valeur"," propriete ":" valeur ",...}

$("button" && ":submit").css({ "color": "red", "background-color": "black" });

$(".div-data").css({ "color": "green", "background-color": "black", "padding": "10px" });

//----------------------------------------------------

//La fonction find() : retourne tous les descendants d’un selecteur

$("ul").find("span").css({ "color": "purple", "border": "2px solid red" });


$(".dom").find("label").text("Mon label").css({ "color": "blue", "background-color": "gray" });

//---------------------------------------------------------

//La fonction children() : retourne les enfants directs d’un selecteur
//NB : le selecteur est optionnel
// $(selecteur).children(selecteur).fonction();

// console.log($(".dom").children("p"));
$("ul").children("li").css({ "color": "red", "background-color": "yellow", "padding": "20px" });


//La fonction parent() : retourne le parent direct d’un selecteur
//NB : le selecteur est optionnel
//$(selecteur).parent().fonction ();

//$("span").parent().css({ "color": "red", "border": "2px solid red" });

$(".dom :submit").parent().css({ "color": "yellowgreen", "background-color": "purple" });

// console.log($(".dom :submit").parent().css({ "color": "yellowgreen", "background-color": "purple" }));

//-----------------------------------------------------------

// La fonction closest() : retourne le parent le plus proche d’un selecteur

// $("span").closest("ul").css({ "color": "black", "border": "2px solid black" });

$("span").closest(".dom").css({ "font-size": "2em" });

//---------------------------------------------------------

//La fonction next() : retourne le frere suivant d’un selecteur

$("li:nth-child(2)").next().css({ color: "green", border: "2px solid green" });//return li 1

//La fonction prev() : retourne le frere precedent  d’un selecteur

$("li:nth-child(2)").prev().css({ color: "green", border: "2px solid green" });//return li 3

// $(".para-dom").next().css({ "font-size": "1em" });
// $(".para-dom").prev().css({ "font-size": "1em" });

//---------------------------------------------------------

//La fonction first() : retourne la 1ere occurence d’un selecteur

$("li").first().css({ color: "red", border: "2px solid red" });

//La fonction last() : retourne la derniere occurence d’un selecteur

$("li").last().css({ color: "yellow", border: "2px solid yellow" });


//on cherche à styliser le dernier input d'un form :  coucleur blanche, arriere bleur ciel, arrondi 5px, padding 10px
//$("form input").last().css({ color: "white", background: "skyblue", "border-radius": "5px", padding: "10px" });


//-----------------------------------------------------

//La fonction siblings() : retourne tous les freres d’un selecteur

$("li:nth-child(2)").siblings().css({ color: "gray", border: "2px solid gray" });

//on cherche à styliser les freres d'un elements qui vient apres un element ayant la classe "para-dom", on met le texte en rouge

$(".para-dom").next().siblings().css("color", "red");

//----------------------------------------------

//modifier le contenu textuel de l'element dont l'attribut for a la valeur "capitale", mettre dedans comme texte "le chef lieu du pas de calais"

$("[for='capitale']").text("le chef lieu du pas de calais");


//La fonction html() Pareil que la fonction text(), mais elle recupère ou modifie le contenu html d’un element

//--------------------------------------------

//$(selecteur).click(cb);

$(".test-btn").click(function () {
    alert("test bouton");
});

//----------------------------------------

//La fonction prepend : ajoute du contenu au debut du selecteur (à l’intérieur et en premier lieu)

//$(".extensible").prepend("contenu d'extension au debut<br/>");

//La fonction append() : ajoute du contenu à la fin du selecteur (à l’intérieur et en dernier lieu)

//-------------------------------------

// La fonction remove() : supprime un element du DOM

$(".supprimer").remove();

//-------------------------------------------------

// Pour accéder et pour modifier les attributs d’un element, on utilise la fonction attr() 

console.log($("a").attr("href"));


//-----------------------------------------------

//Ex : créer un input qui demande la capitale de la France, apres deux div ayant les classes reponse et resultat et un bouton submit que lorsqu’on clique dessus teste si la valeur tapée est ‘’paris’’, mettre
// ‘’Votre réponse est correcte’’ dans la div reponse sinon ‘’Réponse erronée !’’ avec une ecriture et une bordure rouge et dans la zone reponse la bonne reponse.
// Enfin, on affiche le score 10/10 ou 0/10 dans la div resultat.


// $(document).ready(function () {
//     $(".dom input[type='submit']").click(function () {
//         if ($("#capitale").val().toLowerCase() === "paris") {
//             $(".reponse").html(`<span style="color:green">bonne réponse </span>`);
//             $(".resultat").html("10/10");
//         } else {
//             $(".reponse").html(`<span style="color:red">mauvaise réponse </span>`);
//             $(".resultat").html("0/10");
//         }

//         $("#capitale").val("");
//     });
// });

// console.log("p =" + $("p:first-of-type").attr('class'));


// let notes = $(".div-eleve").data("info");
// let moyenne = (Number(notes.note1) + Number(notes.note2)) / 2;

// console.log(moyenne);

// $(".div-data").attr('data-role', 'admin');

$(".div-data").data("info").prenom = "junior";

console.log($(".div-data").data('info'));

//--------------------------------------------------------------

// Ex : changer le prenom de Ryan à Ryan junior

$(document).ready(function () {
    $(".div-data").data("info").prenom = "ryan junior";

    console.log($(".div-data").data("info").prenom = "ryan junior");

});


//---------------------------------

//NB : la fonction data() change les données dans la memoire et PAS DANS LE DOM

//pour recupérer les données data- au format json, la fonction data() est la plus adaptée puisqu'elle lit le format json directement (sans avoir recours à la conversion)

//pour changer les valeur dans le DOM, il faut utiliser la fonction attr(), dans le cas du json, une conversion est nécessaire
// JSON.parse : de chaine vers objet json
// JSON.stringify : d'objet vers une chaine
// ======

//ex : meme enonce en changeant la valeur dans le DOM

// $(".div-data").attr("data-info"); //  retourne la valeur {nom:"HIDRI", prenom:"Ryan"}
// mais le navigateur l'interprete comme etant une chaine de caractère
// d'ou la necessite de la convertir en objet json ==> le navigateur va la prendre comme un objet
objet = JSON.parse($(".div-data").attr("data-info"));
objet.prenom = "Ryan Junior";

// une fois que j'ai fait le changement, je le convertit en chaine de nouveau
$(".div-data").attr("data-info", JSON.stringify(objet)); // changer une velaur élementaire

let chaineJson = $(".div-data").attr("data-info");  // attr va le retourner en tant que chaine de caracteres

//EXPLICATION PLUS DETAILLEE

// objet = JSON.parse(chaineJson);


// objet.prenom = "Ryan Junior";

// let chaineJson2 = JSON.stringify(objet); // convertit le json en chaine

// $(".div-data").attr("data-info", chaineJson2);

//----------------------------------------------+

$('.lien-supp').removeAttr("class");