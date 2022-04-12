<?php

//----------------DECODE-------------------

// on peut convertir un tab php en json et inversement en utilisant respectivement les fonctions json_encode() et json_decode().
// Encodage (PHP JSON)
// encoder un tab indexé en json
// $voitures = ["Volvo", "BMW", "Toyota"];
// echo json_encode($voitures); // ==> donne le tab json suivant ["Volvo","BMW","Toyota"]

//----------------ENCODE-------------------

// encoder un tab associatif en json
// $age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
// echo json_encode($age); // donne l'objet json {"Peter":35,"Ben":37,"Joe":43}
// Décodage (JSON PHP)
// json_decode() permet de decoder un objet json en tab associatif ou en objet php.
// NB : La fonction json_decode() renvoie un objet par défaut. La fonction json_decode() a un deuxième paramètre, et lorsqu'elle est définie sur true, les objets JSON sont décodés dans des tableaux associatifs.

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

// $tab = json_decode($jsonobj, true);
// echo $tab['Peter'];

echo "<br>";

$obj = json_decode($jsonobj);
echo $obj->Peter;
// Parcourir un objet (exactement comme un tab associatif)
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($jsonobj);

foreach ($obj as $key => $value) {
    echo $key . " => " . $value . "<br>";
}

echo '<br>-----------------------------------------------------------------------<br>';
//--------------------try & catch


function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new Exception("Division by zero", 1);
    }
    return $dividend / $divisor;
}

try {
    echo divide(5, 0);
} catch (Exception $ex) {
    $code = $ex->getCode();
    $message = $ex->getMessage();
    $file = $ex->getFile();
    $line = $ex->getLine();
    echo "Exception thrown in $file on line $line: [Code $code]
    $message";
}

//-----------------------------------------------------------------------------

// filter_var($var, FORMAT);
// exp :
$int = 100;
var_dump(filter_var($int, FILTER_VALIDATE_INT));
// NB : si la donnée est conforme au format spécifié, filter_var() retourne la valeur de la variable, sinon false, pour pouvoir bien tester la validation, il faut toujours se référer à une valeur différente de false.
// Exp de test de validité
$int = 100;

if (filter_var($int, FILTER_VALIDATE_INT) !== false) {
    echo ("Integer is valid");
} else {
    echo ("Integer is not valid");
}
// Exception pour la vaeur 0 (zero)
// La valeur 0 est considérée comme false, donc il faut lui faire un test exceptionnel pour le prendre en considération
$int = 0;

if (
    filter_var($int, FILTER_VALIDATE_INT) === 0
    ||     filter_var($int, FILTER_VALIDATE_INT) !== false
) {
    echo ("Integer is valid");
} else {
    echo ("Integer is not valid");
}
// PHP met à disposition plusieurs formats qui sont sous forme de FILTERVALIDATE<suffixe> tels que FILTER_VALIDATE_INT et FILTER_VALIDATE_IP. Le bout de code ci-dessous, une fois exécuté, nous donne la liste des suffixes des formats
?>
<table>
    <tr>
        <td>Filter Name</td>
        <td>Filter ID</td>
    </tr>
    <?php
    foreach (filter_list() as $id => $filter) {
        echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
    }
    ?>
</table>
<?
// NB : avant de valider les données, on peut les nettoyer pour éviter les caractères indésirables ou l’injection de code avec le format FILTER SANITIZE<suffixe>
    // Exp :