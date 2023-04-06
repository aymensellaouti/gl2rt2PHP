<?php

function autoload($className) {

    $filePath = "$className.php";
//    if (file_exists($filePath)) {
//        echo $filePath;
        require_once $filePath;
//    }

}
spl_autoload_register('autoload');