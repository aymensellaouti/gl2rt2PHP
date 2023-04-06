<?php
$name = 'test';
$$name = 'quelquechose';

var_dump($GLOBALS);

function() {
    $GLOBALS['name'];
}