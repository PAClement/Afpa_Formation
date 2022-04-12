<?php

function showMultiplication($limit = 10, $multiple = 10)
{
    $n = 1;

    while ($n <=  $multiple) {
        $show = 'Multiplication ' . $n . ' : ';
        for ($i = 1; $i <= $limit; $i++) {

            $i != $limit ? $show .=  $n * $i . ' - ' : $show .=  $n * $i;
        }
        $n++;
        $show .= '<br>';
        echo $show;
    }
}

// showMultiplication(10, 20);

function word($txt)
{
    return str_replace(" ", "<br>", $txt);
}

// echo word("je suis une phrase longue écrite sur une colonne seulement");

function newWord($line)
{

    // $tab = explode(" ", $line);
    // $new = "";

    // for ($i = 0; $i < count($tab); $i++) {
    //     $new .= $tab[$i] . "<br>";
    // }

    // return $new;

    return implode("<br />", explode(" ", $line));

    // return  preg_replace('/ /', '<br />', $line);
}

// echo newWord("je suis une phrase longue");

function withOut($line)
{

    $new = '';

    for ($i = 0; $i < strlen($line); $i++) {

        $new .= $line[$i] === " " ?  '<br>' : $line[$i];
    }

    return $new;
}

// echo withOut("hello world");

function tabSum($tab = [])
{
    return array_sum($tab);
}

// $tab = [1, 2, 3, 4];
// echo tabSum($tab);

function withoutTab($tab)
{

    $sum = 0;
    foreach ($tab as $value) {
        $sum += $value;
    }

    return $sum;
}

// $tab = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// echo tabSum($tab);

//Ex 7 : calculer la somme des elements d’un tab pour un intervalle donné (position inf et position sup, on utilise les positions naturelles).

function sommeIntervalle($tab, $inf, $sup)
{

    if ((count($tab) === 0)  || ($inf > $sup)) {
        return false;
    } else {
        // parcours du tab
        // $somme = 0;
        // for ($i = $inf - 1; $i < $sup; $i++) {
        //     $somme += $tab[$i];
        // }
        // return $somme;

        $sousTab = array_slice($tab, $inf - 1, $sup - $inf + 1);
        return  array_sum($sousTab);
    }
}

// $nombres = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// echo sommeIntervalle($nombres, 4, 6) === false ? "erreur" : sommeIntervalle($nombres, 4, 6);


function getTeam($tab)
{
    $cobinaisons = [];
    for ($i = 0; $i < count($tab); $i++) {

        for ($j = 0; $j < count($tab); $j++) {
            //
            if (($tab[$i] === $tab[$j]) || (in_array($tab[$j] . $tab[$i], $cobinaisons))) {
                continue;
            }
            array_push($cobinaisons, $tab[$i] . $tab[$j]);
        }
    }
    return $cobinaisons;
}

// $tab = ["a", "b", "c", "d"];
// var_dump(getTeam($tab));
