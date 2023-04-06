<?php

function change(&$x, &$y) {
    $x += 2;
    $y -= 2;
}

$x = 5;
$y = 4;
change($x, $y);
echo $x;
echo $y;

function somme(...$args): int {
    $somme = 0;
    foreach($args as $element) {
        $somme+=$element;
    }
    return $somme;
}

echo somme(1,2,3,4);