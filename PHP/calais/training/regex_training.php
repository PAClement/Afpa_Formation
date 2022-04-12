<?php

echo '<h1>Regex exo</h1> <br>';

$str = "07 60 10 74 03";
$pattern = "/^0[67][0-9]{8}|( [0-9]{2}){4}$/";
var_dump(preg_match($pattern, $str));
