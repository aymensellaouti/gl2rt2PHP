<?php
$x = 0;

echo $x;

//unset($x);
phpinfo(INFO_VARIABLES);
if (isset($x)) {
    echo $x;
} else {
    echo 'Variable innexistante';
}

$x = 0;
$y = null;
$z = 3;

if ($x) {
    $a = $x;
} else if ($y) {
    $a = $y;
} else {
    $a = $z;
}
echo $a = $x ?? $y ?? $z;