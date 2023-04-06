<?php

$array = [1,2,3,4.5,'ccc', 2.4, 'test', -2];

function extractArray($tab, string $type) {
    $function = "is_$type";
    $result = [];
    foreach ($tab as $element) {
        if ($function($element)) {
            $result[] = $element;
        }
    }
    var_dump($result);
}
extractArray($array, 'int');
extractArray($array, 'float');