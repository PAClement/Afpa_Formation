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