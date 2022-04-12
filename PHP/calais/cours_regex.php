<?php
// les regex cherchent à verifier la conformité d’une chaine de caractères à un pattern (ou modele ou masque)  spécifique.
// Pour utiliser les regex on dispose de 3 fonctions.
// preg_match() : permet de vérifier si une chaine est conforme au pattern ou pas, elle retourne 1 si oui, 0 sinon.
// syntaxe :
// preg_match($pattern, $chaine);
// syntaxe des patterns : admet des délimiteurs, des symboles spéciaux tels que / / ou # #
// exp :
$pattern = "/[a-z]/i";
$pattern = "#[a-z]#i";
// Symboles des patterns :
// - symbole de groupement [] : la chaine doit etre conforme aux symboles du groupe entre []
// Exp :
$str = "salut";
$pattern = "/[abc]/";
var_dump(preg_match($pattern, $str)); // 1
// la chaine contient des caractères du groupe abc
$str = "slt";
$pattern = "/[abc]/";
var_dump(preg_match($pattern, $str));  // 0
// la chaine ne contient pas un caractère du groupe abc
// NB : je peux spécifier aussi des intervalles de données
$pattern = "/[a-b]/"; // intervalle de a à z minuscules
$pattern = "/[A-Z]/"; // intervalle de A à Z majuscules
$pattern = "/[0-9]/"; // chiffres de 0 à 9
// NB : on peut combiner les intervalles
$pattern = "/[a-zA-Z0-9]/"; // les lettres min et maj et les chiffres
// - Pattern sans délimiteur de debut et de fin : la chaine doit contenir au moins l’un des symboles du groupe
$str = "salut";
$pattern = "/[abc]/";
var_dump(preg_match($pattern, $str)); // 1 : la chaine contient au moins l’un des symboles //du groupe
$str = "slt";
$pattern = "/[abc]/";
var_dump(preg_match($pattern, $str)); // 0 : la chaine ne contient aucun symbole du groupe
// - Symboles de debut et de fin ^ $ (délimiteur de debut et de fin ) : ^ indique le début de la chaine, et $ indique sa fin. La chaine doit STRICTEMENT respecter le pattern à la lettre (en nombre et en ordre).
$str = "az";
$pattern = "/^[abc]z$/";
var_dump(preg_match($pattern, $str)); // 1 car ca commence par un sysmbole du groupe abc et suivi par z
$str = "dz"; //  0 :ne prend pas car ne commence par a, b ou c
$str = "za"; // 0 : doit respecter l’ordre, z en denier lieu
$str = "ac"; // 0 : ne finit pas par z
// - symbole de négation ^ : la chaine ne doit pas contenir le symbole précédé par ^
$str = "da";
$pattern = "/^[^abc][a-z]$/";
var_dump(preg_match($pattern, $str)); // 1 : ne commence par aucun des symboles abc et suivi d’un caractère du groupe a-z
$str = "cf"; // 0 : cara ca commence par un symbole du groupe abc
// - symbole OU logique | : une expression ou une autre rendent la chaine valide :
$str = "d";
$pattern = "/^([^abc])|([^0-9])$/";
var_dump(preg_match($pattern, $str)); // 1
// ([^abc])  |    ([^0-9]) : cette expression est pour une chaine qui ne commence pas par a,b ou c ni un chiffre

$str = "5"; // 1 valide par l’expression [^abc] 
// - symbole générique . (point) : n’importe quel caractère
$str = "+";
$pattern = "/^.$/";
var_dump(preg_match($pattern, $str)); //1
$str = "5"; //1
$str = "f"; //1
$str = "D"; //1
// métacaractères des patterns
// \d : correspond à n'importe quel caractère numérique. Identique à [0-9]
// $str = "7";
// $pattern = "/^\d$/";
// \D : Correspond à tout caractère non numérique. Identique à [^0-9] (le contraire de \d)
// $str = "a";
// $pattern = "/^\D$/";
// var_dump(preg_match($pattern, $str)); // 1

$str = "9";
$pattern = "/^\D$/";
var_dump(preg_match($pattern, $str)); // 0 : car 9 est un chiffre
// \s : Correspond à n'importe quel caractère d'espacement (espace, tabulation, saut de ligne ou retour chariot). Identique à [ \t\n\r]
// \S : le contraire de \s
// \w : Correspond à n'importe quel caractère de mot (défini comme a à z, A à Z, 0 à 9 et le trait de soulignement). Identique à [a-zA-Z_0-9]
// \W : le contraire de \w

// Quantificateurs des patterns 
// + : 1,N fois
$str = "a";
$pattern = "/^[a-z]+$/";
var_dump(preg_match($pattern, $str)); // 1 : au moins une fois
$str = "abc";  // 1 : plusieurs fois
$str = "";  // 0 : chaine vide
// * : 0,N fois
$str = "a";
$pattern = "/^[a-z]*$/";
var_dump(preg_match($pattern, $str)); // 1 : au moins une fois

$str = "abc"; // 1 : plusieurs fois
$str = ""; // 1 : aucune fois
// ? : 0,1 fois
$str = "a";
$pattern = "/^[a-z]?$/";
var_dump(preg_match($pattern, $str)); // 1 :  une seule fois

$str = ""; // 1 : aucune fois
$str = "ab"; // 0 : plusieurs fois
// {n} : n est un nombre positif, ca se répète n fois (ni plus ni moins)
$str = "abc";
$pattern = "/^[a-z]{3}$/";
var_dump(preg_match($pattern, $str)); // 1 :  3 fois

$str = "abcd"; // 0 : autre que 3
// {n, m} : n et m des nombres positifs, ca se répète entre n et m fois (ni plus ni moins)
$str = "a";
$pattern = "/^[a-z]{1,2}$/";
var_dump(preg_match($pattern, $str)); // 1 :  1 fois

$str = "ab"; // 1 : 2 fois
$str = "abc"; // 0 :  sup à 2 fois
$str = ""; // 0 :  inf à 1 fois
// {n, } : n : nombre positif, ca se répète au moins n fois (pas moins, plus oui)
$str = "abc";
$pattern = "/^[a-z]{3,}$/";
var_dump(preg_match($pattern, $str)); // 1 :  3 fois minimum

$str = "ab"; // 0 : 2 fois <3
$str = "abcd"; // 1 :  sup à 3 fois
// Echappement des caractères spéciaux
// NB : Si votre expression doit rechercher l'un des caractères spéciaux, vous pouvez utiliser une barre oblique inverse ( \ ) pour les échapper. Par exemple, pour rechercher un ou plusieurs points d'interrogation, vous pouvez utiliser l'expression suivante : $pattern = '/?+/';
$str = "???";
$pattern = "/^\?+$/";
var_dump(preg_match($pattern, $str)); // 1 :  contient ? plus qu'une fois

//==> le caractère ? a une signification particulière (caractère spécial), pour le prendre comme un caractère normal, 
//il faut le précéder par le caractère d’échappement \
